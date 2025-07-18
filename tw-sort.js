const fs = require('fs');
const path = require('path');
const glob = require('glob');
const sorterModule = require('@shufo/tailwindcss-class-sorter');

// Access the class safely
const TailwindCSSClassSorter = sorterModule.TailwindCSSClassSorter;
const sorter = new TailwindCSSClassSorter();

glob('**/*.{php,html,js}', { ignore: 'node_modules/**' }, (err, files) => {
if (err) throw err;

files.forEach((file) => {
  const fullPath = path.resolve(file);
  const content = fs.readFileSync(fullPath, 'utf8');
  const sorted = sorter.sortClassNames(content);

  if (content !== sorted) {
    fs.writeFileSync(fullPath, sorted, 'utf8');
    console.log(`✅ Sorted: ${file}`);
  }
});
});
