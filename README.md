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

## To Do

- [x] Create static build process
- [ ] Automate deploy to Cloudways  
- [ ] Add staging branch
- [ ] Inline critical CSS
