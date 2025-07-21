# Westervelt Real Estate Site

This is the custom PHP/HTML/CSS site for Westervelt Real Estate.

## Local Development

- Files are managed locally under `/Local Sites/westervelt/...`
- Run `npm run dev` for development (PHP server + Tailwind + BrowserSync)
- PHP is used for templating and includes (no WordPress)

## Build Process

### For Development
```bash
npm run dev  # Start local dev server with hot reloading
```

### For Static Deployment
```bash
npm run build  # Creates self-contained PHP files in /dist/
```

This flattens PHP includes (header/footer) into self-contained PHP files while preserving the component structure for future updates.

## Git Usage

- Push to `main` via GitHub Desktop for backup
- Build static files before deployment: `npm run build`
- Optional: Deploy `/dist/` folder to production server

## Recent Updates

- ✅ **Build Process Complete**: `flatten-includes.js` script flattens PHP includes into self-contained files
- ✅ **Git Integration**: Automated deploy script with `npm run deploy` 
- ✅ **Development Workflow**: Full dev environment with hot reloading via BrowserSync
- ✅ **Asset Organization**: Images and fonts properly structured in `/assets/`
- ✅ **Component Architecture**: Reusable PHP components in `/components/cards/`

## To Do

- [x] Create static build process
- [x] Set up automated deploy to Cloudways (via `npm run deploy`)
- [ ] Add staging branch
- [ ] Inline critical CSS
- [ ] Performance optimization audit
