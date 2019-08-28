module.exports = {
	"root": true,
	"extends": "eslint:recommended",
	"globals": {
		"wp": true,
		"acf": true,
		"admin_url": true,
		"custom": true,
	},
	"env": {
		"node": true,
		"es6": true,
		"amd": true,
		"browser": true,
		"jquery": true
	},
	"parserOptions": {
		"ecmaFeatures": {
		"globalReturn": true,
		"generators": false,
		"objectLiteralDuplicateProperties": false,
		"experimentalObjectRestSpread": true
		},
		"ecmaVersion": 2017,
		"sourceType": "module"
	},
	"plugins": [
		"import"
	],
	"settings": {
		"import/core-modules": [],
		"import/ignore": [
		"node_modules",
		"\\.(coffee|scss|css|less|hbs|svg|json)$"
		]
	},
	"rules": {
		"no-unused-vars": 0,
		"no-cond-assign": 0,
		 "no-useless-escape": 0,
		"no-empty": 0,
		"no-sparse-arrays": 0,
		"no-control-regex": 0,
		"no-undef": 0,
		"no-redeclare": 0,
		"no-unsafe-finally": 0,
		"no-extra-semi": 0,
		"comma-dangle": 0
	}
}
