module.exports = {
  proxy: "localhost:8001",
  files: ["**/*.php", "**/*.html", "style.css", "assets/**/*"],
  injectChanges: true,
  open: false,
  notify: false,
  ghostMode: true,
  host: "192.168.0.93",
  port: 3000,
  ui: {
    port: 3001
  },
  logLevel: "info",
};
