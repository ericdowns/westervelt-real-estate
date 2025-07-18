module.exports = {
  proxy: "localhost:8001",
  files: ["**/*.php", "**/*.html", "style.css", "assets/**/*"],
  injectChanges: true,
  open: false,
  notify: false,
  ghostMode: false,
  logLevel: "info",
};
