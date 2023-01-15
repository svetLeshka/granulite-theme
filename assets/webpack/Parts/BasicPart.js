const path = require("path");
const HtmlWebpackPlugin = require("../Plugins/HtmlWebpackPlugin");
const MiniCssExtractPlugin = require("../Plugins/MiniCssExtractPlugin");
const CleanWebpackPlugin = require("../Plugins/CleanWebpackPlugin");
const SpriteLoaderPlugin = require("../Plugins/SpriteLoaderPlugin");
const HtmlWebpackPugPlugin = require("../Plugins/HtmlWebpackPugPlugin");
const FaviconsWebpackPlugin = require('favicons-webpack-plugin');
const Pug = require("../Presets/Pug");
const htmlLoader = require("../Loaders/HtmlLoader");
const Scripts = require("../Presets/Scripts");
const Style = require("../Presets/Style");
const Fonts = require("../Presets/Fonts");
const SvgSprite = require("../Presets/SvgSprite");
const Images = require("../Presets/Images");
const Videos = require("../Presets/Videos");
const { dirs } = require('../Settings/Constants');

module.exports = {
	context: dirs.src,
	target: "web",
	entry: {
		main: path.join(dirs.src, "index.js")
	},
	output: {
		path: dirs.dist,
		filename: 'assets/js/[name].bundle.js?hash=[hash]',
		publicPath: "/",
		assetModuleFilename: '[path][name][ext]'
	},
	resolve: {
		modules: ['node_modules'],
		alias: {
			'@': dirs.src,
			'@public': path.join(dirs.src, "public"),
			'@assets': path.join(dirs.src, "assets"),
			'@js': path.join(dirs.src, "assets", "js"),
			'@scss': path.join(dirs.src, "assets", "scss"),
			'@images': path.join(dirs.src, "public", "images"),
			'@videos': path.join(dirs.src, "public", "videos"),
			'@icons': path.join(dirs.src, "public", "icons"),
		},
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: "assets/css/style.css?hash=[hash]",
		}),
		new CleanWebpackPlugin(),
		new SpriteLoaderPlugin(),
		...(new HtmlWebpackPlugin()),
		new HtmlWebpackPugPlugin()
		//new FaviconsWebpackPlugin('everest.svg')
	],
	module: {
		rules: [
			Pug,
			SvgSprite,
			Scripts,
			Style,
			Fonts,
			Images,
			Videos,
			/* {
				test: /\.html$/i,
				loader: "html-loader",
				options: {
					sources: {
						list: [
							{
								tag: "img",
								attribute: "src",
								type: "src",
							},
							{
								tag: "div",
								attribute: "data-src",
								type: "src",
							},
						]
					}
				}
			} */
		],
	}
}