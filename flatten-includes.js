#!/usr/bin/env node

const fs = require('fs');
const path = require('path');
const glob = require('glob');

console.log('🔨 Flattening PHP includes for static deployment...\n');

// Configuration
const config = {
  sourceDir: './',
  outputDir: './dist',
  includes: {
    'header.php': './includes/header.php',
    'footer.php': './includes/footer.php'
  },
  // Files to process (all PHP files except includes and components)
  filePattern: './*.php',
  excludePatterns: ['./includes/**', './components/**', './dist/**', './node_modules/**']
};

// Create output directory
if (!fs.existsSync(config.outputDir)) {
  fs.mkdirSync(config.outputDir, { recursive: true });
  console.log(`📁 Created output directory: ${config.outputDir}`);
}

// Read include files into memory
const includeContents = {};
for (const [name, filePath] of Object.entries(config.includes)) {
  if (fs.existsSync(filePath)) {
    includeContents[name] = fs.readFileSync(filePath, 'utf8');
    console.log(`✅ Loaded include: ${filePath}`);
  } else {
    console.warn(`⚠️  Include file not found: ${filePath}`);
  }
}

// Find all PHP files to process
const phpFiles = glob.sync(config.filePattern, { 
  ignore: config.excludePatterns 
});

console.log(`\n📄 Found ${phpFiles.length} PHP files to process:\n`);

let processedCount = 0;
let errorCount = 0;

phpFiles.forEach(filePath => {
  try {
    // Read the original file
    let content = fs.readFileSync(filePath, 'utf8');
    const originalSize = content.length;
    
    // Track what includes were replaced
    const replacements = [];
    
    // Replace header include
    if (includeContents['header.php']) {
      const headerPattern = /<\?php\s+include\s+['"]\.\/(includes\/header\.php)['"];\s*\?>/gi;
      if (content.match(headerPattern)) {
        content = content.replace(headerPattern, includeContents['header.php']);
        replacements.push('header');
      }
    }
    
    // Replace footer include
    if (includeContents['footer.php']) {
      const footerPattern = /<\?php\s+include\s+['"]\.\/(includes\/footer\.php)['"];\s*\?>/gi;
      if (content.match(footerPattern)) {
        content = content.replace(footerPattern, includeContents['footer.php']);
        replacements.push('footer');
      }
    }
    
    // Generate output filename (keep .php extension)
    const fileName = path.basename(filePath);
    const outputPath = path.join(config.outputDir, fileName);
    
    // Write the flattened file
    fs.writeFileSync(outputPath, content);
    
    const newSize = content.length;
    const sizeDiff = newSize - originalSize;
    const replacementText = replacements.length > 0 ? ` (${replacements.join(', ')})` : ' (no includes)';
    
    console.log(`   ${filePath} → ${outputPath}${replacementText}`);
    console.log(`   📊 Size: ${originalSize} → ${newSize} bytes (${sizeDiff > 0 ? '+' : ''}${sizeDiff})`);
    
    processedCount++;
    
  } catch (error) {
    console.error(`❌ Error processing ${filePath}:`, error.message);
    errorCount++;
  }
});

// Copy assets directory
const assetsSource = './assets';
const assetsTarget = path.join(config.outputDir, 'assets');

if (fs.existsSync(assetsSource)) {
  try {
    // Create assets directory in output
    if (!fs.existsSync(assetsTarget)) {
      fs.mkdirSync(assetsTarget, { recursive: true });
    }
    
    // Copy assets recursively
    copyDirectory(assetsSource, assetsTarget);
    console.log(`\n📁 Copied assets directory to ${assetsTarget}`);
  } catch (error) {
    console.error(`❌ Error copying assets:`, error.message);
  }
}

// Copy style.css
const styleSource = './style.css';
const styleTarget = path.join(config.outputDir, 'style.css');
if (fs.existsSync(styleSource)) {
  fs.copyFileSync(styleSource, styleTarget);
  console.log(`📄 Copied style.css to ${styleTarget}`);
}

console.log(`\n✨ Build complete!`);
console.log(`   📊 Processed: ${processedCount} files`);
console.log(`   ❌ Errors: ${errorCount} files`);
console.log(`   📁 Output: ${config.outputDir}/`);
console.log(`\n🚀 Static files ready for deployment!`);

// Helper function to copy directory recursively
function copyDirectory(source, target) {
  if (!fs.existsSync(target)) {
    fs.mkdirSync(target, { recursive: true });
  }
  
  const files = fs.readdirSync(source);
  
  files.forEach(file => {
    const sourcePath = path.join(source, file);
    const targetPath = path.join(target, file);
    
    if (fs.statSync(sourcePath).isDirectory()) {
      copyDirectory(sourcePath, targetPath);
    } else {
      fs.copyFileSync(sourcePath, targetPath);
    }
  });
}