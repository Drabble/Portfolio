const path = require("path");
var HardSourceWebpackPlugin = require("hard-source-webpack-plugin");

function resolveSrc(_path) {
  return path.join(__dirname, _path);
}
// vue.config.js
module.exports = {
  lintOnSave: true,

  configureWebpack: {
    // Set up all the aliases we use in our app.
    resolve: {
      alias: {
        assets: resolveSrc("src/assets"),
      },
    },
    output: {
      chunkFilename: "[id].[hash].js",
      crossOriginLoading: "anonymous",
      filename: "[name].[hash].js",
      path: path.resolve(__dirname, "dist"),
    },
    plugins: [new HardSourceWebpackPlugin()],
  },

  css: {
    // Enable CSS source maps.
    sourceMap: process.env.NODE_ENV !== "production",
  },

  pwa: {
    themeColor: "#42b983",
    name: "Antoine Drabble",
    msTileColor: "#ffffff",
    appleMobileWebAppCapable: "yes",
    appleMobileWebAppStatusBarStyle: "white",
    iconPaths: {
      favicon32: "images/icons/favicon-32x32.png",
      favicon16: "images/icons/favicon-16x16.png",
      appleTouchIcon: "images/icons/apple-touch-icon-152x152.png",
      maskIcon: "images/icons/safari-pinned-tab.svg",
      msTileImage: "images/icons/mstile-150x150.png",
    },
    // configure the workbox plugin
    workboxPluginMode: "InjectManifest",
    workboxOptions: {
      swSrc: "./src/sw.js",
      swDest: "service-worker.js",
    },
  },
};
