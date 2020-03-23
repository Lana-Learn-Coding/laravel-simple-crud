const mix = require('laravel-mix');
const VuetifyLoaderPlugin = require('vuetify-loader/lib/plugin');

mix
  .ts('resources/js/app.ts', 'public/js/app.js')
  .sass('resources/sass/app.scss', 'public/css')
  .webpackConfig({
    plugins: [
      new VuetifyLoaderPlugin()
    ],
    module: {
      rules: [
        {
          enforce: 'pre',
          exclude: /node_modules/,
          loader: 'eslint-loader',
          test: /\.(js|ts|vue)?$/
        },
        {
          test: /\.tsx?$/,
          loader: "ts-loader",
          exclude: /node_modules/
        }
      ]
    },
    resolve: {
      extensions: ["*", ".js", ".jsx", ".vue", ".ts", ".tsx"]
    }
  });
