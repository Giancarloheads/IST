/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["vcvWebpackJsonp4x"] = self["vcvWebpackJsonp4x"] || []).push([["element"],{

/***/ "./faqToggle/component.js":
/*!********************************!*\
  !*** ./faqToggle/component.js ***!
  \********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": function() { return /* binding */ FaqToggle; }\n/* harmony export */ });\n/* harmony import */ var _babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/extends */ \"./node_modules/@babel/runtime/helpers/esm/extends.js\");\n/* harmony import */ var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/toConsumableArray */ \"./node_modules/@babel/runtime/helpers/esm/toConsumableArray.js\");\n/* harmony import */ var _babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @babel/runtime/helpers/classCallCheck */ \"./node_modules/@babel/runtime/helpers/esm/classCallCheck.js\");\n/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ \"./node_modules/@babel/runtime/helpers/esm/createClass.js\");\n/* harmony import */ var _babel_runtime_helpers_inherits__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @babel/runtime/helpers/inherits */ \"./node_modules/@babel/runtime/helpers/esm/inherits.js\");\n/* harmony import */ var _babel_runtime_helpers_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @babel/runtime/helpers/possibleConstructorReturn */ \"./node_modules/@babel/runtime/helpers/esm/possibleConstructorReturn.js\");\n/* harmony import */ var _babel_runtime_helpers_getPrototypeOf__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @babel/runtime/helpers/getPrototypeOf */ \"./node_modules/@babel/runtime/helpers/esm/getPrototypeOf.js\");\n/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! react */ \"./node_modules/react/index.js\");\n/* harmony import */ var vc_cake__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! vc-cake */ \"./node_modules/vc-cake/index.js\");\n/* harmony import */ var vc_cake__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(vc_cake__WEBPACK_IMPORTED_MODULE_8__);\n/* harmony import */ var react_dom_server__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! react-dom/server */ \"./node_modules/react-dom/server.browser.js\");\n\n\n\n\n\n\n\n\nfunction _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = (0,_babel_runtime_helpers_getPrototypeOf__WEBPACK_IMPORTED_MODULE_6__[\"default\"])(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = (0,_babel_runtime_helpers_getPrototypeOf__WEBPACK_IMPORTED_MODULE_6__[\"default\"])(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return (0,_babel_runtime_helpers_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_5__[\"default\"])(this, result); }; }\n\nfunction _isNativeReflectConstruct() { if (typeof Reflect === \"undefined\" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === \"function\") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }\n\n\n\n\nvar vcvAPI = vc_cake__WEBPACK_IMPORTED_MODULE_8___default().getService('api');\n\nvar FaqToggle = /*#__PURE__*/function (_vcvAPI$elementCompon) {\n  (0,_babel_runtime_helpers_inherits__WEBPACK_IMPORTED_MODULE_4__[\"default\"])(FaqToggle, _vcvAPI$elementCompon);\n\n  var _super = _createSuper(FaqToggle);\n\n  function FaqToggle() {\n    (0,_babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_2__[\"default\"])(this, FaqToggle);\n\n    return _super.apply(this, arguments);\n  }\n\n  (0,_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_3__[\"default\"])(FaqToggle, [{\n    key: \"getColorSelector\",\n    value: function getColorSelector(color) {\n      return (0,_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_1__[\"default\"])(color.matchAll(/[\\da-f]+/gi)).map(function (match) {\n        return match[0];\n      }).join('-');\n    }\n  }, {\n    key: \"getContent\",\n    value: function getContent() {\n      var atts = this.props.atts;\n      var textBlock = atts.textBlock,\n          titleText = atts.titleText,\n          elementTag = atts.elementTag;\n      var CustomTag = elementTag;\n      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_7__.createElement(\"div\", {\n        className: \"vce-faq-toggle-inner\"\n      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_7__.createElement(\"div\", {\n        className: \"vce-faq-toggle-title\"\n      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_7__.createElement(CustomTag, {\n        className: \"vce-faq-toggle-title-text\",\n        \"aria-controls\": \"\".concat(atts.tag, \"-\").concat(this.props.id),\n        \"aria-expanded\": \"false\"\n      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_7__.createElement(\"i\", {\n        className: \"vce-faq-toggle-icon\"\n      }), titleText)), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_7__.createElement(\"div\", {\n        className: \"vce-faq-toggle-text-block\",\n        role: \"region\",\n        id: \"\".concat(atts.tag, \"-\").concat(this.props.id)\n      }, textBlock));\n    }\n  }, {\n    key: \"render\",\n    value: function render() {\n      var _this$props = this.props,\n          id = _this$props.id,\n          atts = _this$props.atts,\n          editor = _this$props.editor;\n      var shape = atts.shape,\n          customHoverColors = atts.customHoverColors,\n          metaCustomId = atts.metaCustomId,\n          customClass = atts.customClass,\n          iconColor = atts.iconColor,\n          shapeColor = atts.shapeColor,\n          iconHoverColor = atts.iconHoverColor,\n          shapeHoverColor = atts.shapeHoverColor;\n      var containerClasses = 'vce-faq-toggle';\n      var customProps = {};\n\n      if (typeof customClass === 'string' && customClass) {\n        containerClasses += ' ' + customClass;\n      }\n\n      containerClasses += \" vce-faq-toggle-color--\".concat(this.getColorSelector(iconColor));\n\n      if (shape !== 'none') {\n        containerClasses += \" vce-faq-toggle-shape-color--\".concat(this.getColorSelector(shapeColor));\n\n        if (shape !== 'square') {\n          containerClasses += \" vce-faq-toggle-shape--\".concat(shape);\n        }\n      }\n\n      if (customHoverColors) {\n        containerClasses += \" vce-faq-toggle-hover-color--\".concat(this.getColorSelector(iconHoverColor));\n\n        if (shape !== 'none') {\n          containerClasses += \" vce-faq-toggle-shape-hover-color--\".concat(this.getColorSelector(shapeHoverColor));\n        }\n      }\n\n      if (metaCustomId) {\n        customProps.id = metaCustomId;\n      }\n\n      var doAll = this.applyDO('margin padding border background animation');\n      var content = this.getContent();\n      var stringContent = (0,react_dom_server__WEBPACK_IMPORTED_MODULE_9__.renderToStaticMarkup)(content);\n      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_7__.createElement(\"div\", (0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__[\"default\"])({\n        className: containerClasses\n      }, editor, customProps), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_7__.createElement(\"div\", (0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__[\"default\"])({\n        className: \"vce-faq-toggle-wrapper vce\",\n        id: 'el-' + id\n      }, doAll), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_7__.createElement(\"div\", {\n        className: \"vcvhelper\",\n        \"data-vcvs-html\": stringContent\n      }, content)));\n    }\n  }]);\n\n  return FaqToggle;\n}(vcvAPI.elementComponent);\n\n\n\n//# sourceURL=webpack:///./faqToggle/component.js?");

/***/ }),

/***/ "./faqToggle/index.js":
/*!****************************!*\
  !*** ./faqToggle/index.js ***!
  \****************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var vc_cake__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vc-cake */ \"./node_modules/vc-cake/index.js\");\n/* harmony import */ var vc_cake__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(vc_cake__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _component__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./component */ \"./faqToggle/component.js\");\n/* eslint-disable import/no-webpack-loader-syntax */\n\n\nvar vcvAddElement = vc_cake__WEBPACK_IMPORTED_MODULE_0___default().getService('cook').add;\nvcvAddElement(__webpack_require__(/*! ./settings.json */ \"./faqToggle/settings.json\"), // Component callback\nfunction (component) {\n  component.add(_component__WEBPACK_IMPORTED_MODULE_1__[\"default\"]);\n}, // css settings // css for element\n{\n  css: __webpack_require__(/*! raw-loader!./styles.css */ \"./node_modules/raw-loader/index.js!./faqToggle/styles.css\"),\n  editorCss: __webpack_require__(/*! raw-loader!./editor.css */ \"./node_modules/raw-loader/index.js!./faqToggle/editor.css\"),\n  mixins: {\n    color: {\n      mixin: __webpack_require__(/*! raw-loader!./cssMixins/color.pcss */ \"./node_modules/raw-loader/index.js!./faqToggle/cssMixins/color.pcss\")\n    },\n    shapeColor: {\n      mixin: __webpack_require__(/*! raw-loader!./cssMixins/shapeColor.pcss */ \"./node_modules/raw-loader/index.js!./faqToggle/cssMixins/shapeColor.pcss\")\n    },\n    hoverColor: {\n      mixin: __webpack_require__(/*! raw-loader!./cssMixins/hoverColor.pcss */ \"./node_modules/raw-loader/index.js!./faqToggle/cssMixins/hoverColor.pcss\")\n    },\n    shapeHoverColor: {\n      mixin: __webpack_require__(/*! raw-loader!./cssMixins/shapeHoverColor.pcss */ \"./node_modules/raw-loader/index.js!./faqToggle/cssMixins/shapeHoverColor.pcss\")\n    }\n  }\n}, '');\n\n//# sourceURL=webpack:///./faqToggle/index.js?");

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./faqToggle/cssMixins/color.pcss":
/*!*******************************************************************************!*\
  !*** ../../node_modules/raw-loader/index.js!./faqToggle/cssMixins/color.pcss ***!
  \*******************************************************************************/
/***/ (function(module) {

eval("module.exports = \".vce-faq-toggle-color--$selector {\\n  .vce-faq-toggle-icon::before,\\n  .vce-faq-toggle-icon::after {\\n    @if $color != false {\\n      background-color: $color;\\n    }\\n  }\\n}\"\n\n//# sourceURL=webpack:///./faqToggle/cssMixins/color.pcss?../../node_modules/raw-loader/index.js");

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./faqToggle/cssMixins/hoverColor.pcss":
/*!************************************************************************************!*\
  !*** ../../node_modules/raw-loader/index.js!./faqToggle/cssMixins/hoverColor.pcss ***!
  \************************************************************************************/
/***/ (function(module) {

eval("module.exports = \".vce-faq-toggle-hover-color--$selector {\\n  .vce-faq-toggle-title:hover {\\n    .vce-faq-toggle-icon::before,\\n    .vce-faq-toggle-icon::after {\\n      @if $hoverColor != false {\\n        background-color: $hoverColor;\\n      }\\n    }\\n  }\\n}\"\n\n//# sourceURL=webpack:///./faqToggle/cssMixins/hoverColor.pcss?../../node_modules/raw-loader/index.js");

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./faqToggle/cssMixins/shapeColor.pcss":
/*!************************************************************************************!*\
  !*** ../../node_modules/raw-loader/index.js!./faqToggle/cssMixins/shapeColor.pcss ***!
  \************************************************************************************/
/***/ (function(module) {

eval("module.exports = \".vce-faq-toggle-shape-color--$selector {\\n  .vce-faq-toggle-icon {\\n    @if $shapeColor != false {\\n      background-color: $shapeColor;\\n    }\\n  }\\n}\"\n\n//# sourceURL=webpack:///./faqToggle/cssMixins/shapeColor.pcss?../../node_modules/raw-loader/index.js");

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./faqToggle/cssMixins/shapeHoverColor.pcss":
/*!*****************************************************************************************!*\
  !*** ../../node_modules/raw-loader/index.js!./faqToggle/cssMixins/shapeHoverColor.pcss ***!
  \*****************************************************************************************/
/***/ (function(module) {

eval("module.exports = \".vce-faq-toggle-shape-hover-color--$selector {\\n  .vce-faq-toggle-title:hover {\\n    .vce-faq-toggle-icon {\\n      @if $shapeHoverColor != false {\\n        background-color: $shapeHoverColor;\\n      }\\n    }\\n  }\\n}\"\n\n//# sourceURL=webpack:///./faqToggle/cssMixins/shapeHoverColor.pcss?../../node_modules/raw-loader/index.js");

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./faqToggle/editor.css":
/*!*********************************************************************!*\
  !*** ../../node_modules/raw-loader/index.js!./faqToggle/editor.css ***!
  \*********************************************************************/
/***/ (function(module) {

eval("module.exports = \".vce-faq-toggle {\\n  min-height: 1em;\\n}\\n.vce-faq-toggle .vce-faq-toggle-text-block > vcvhelper > *:last-child, .vce-faq-toggle .vce-faq-toggle-text-block > .vcvhelper > *:last-child {\\n  margin-bottom: 0;\\n}\\n\\n.vce-faq-toggle .vce-faq-toggle-text-block > vcvhelper > *:first-child, .vce-faq-toggle .vce-faq-toggle-text-block > .vcvhelper > *:first-child {\\n  margin-top: 0;\\n}\"\n\n//# sourceURL=webpack:///./faqToggle/editor.css?../../node_modules/raw-loader/index.js");

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./faqToggle/styles.css":
/*!*********************************************************************!*\
  !*** ../../node_modules/raw-loader/index.js!./faqToggle/styles.css ***!
  \*********************************************************************/
/***/ (function(module) {

eval("module.exports = \".vce-faq-toggle .vce-faq-toggle-text-block > *:last-child {\\n  margin-bottom: 0;\\n}\\n\\n.vce-faq-toggle .vce-faq-toggle-text-block > *:first-child {\\n  margin-top: 0;\\n}\\n\\n.vce-faq-toggle-title {\\n  padding-left: 33px;\\n  position: relative;\\n  cursor: pointer;\\n}\\n\\n.rtl .vce-faq-toggle-title ,\\n[dir=\\\"rlt\\\"] .vce-faq-toggle-title  {\\n  padding-left: initial;\\n  padding-right: 33px;\\n}\\n\\n.vce-faq-toggle-title-text {\\n  position: relative;\\n}\\n\\n.vce-faq-toggle-icon {\\n  position: absolute;\\n  left: -33px;\\n  top: 50%;\\n  -webkit-transform: translate(0, -50%);\\n          transform: translate(0, -50%);\\n  height: 22px;\\n  width: 22px;\\n  transition: background-color .2s ease-in-out;\\n}\\n\\n.rtl .vce-faq-toggle-icon ,\\n[dir=\\\"rlt\\\"] .vce-faq-toggle-icon  {\\n  left: auto;\\n  right: -33px;\\n}\\n\\n.vce-faq-toggle-icon::before,\\n.vce-faq-toggle-icon::after {\\n  content: '';\\n  display: block;\\n  position: absolute;\\n  box-sizing: border-box;\\n  -webkit-transform: translate(-50%, -50%);\\n          transform: translate(-50%, -50%);\\n  left: 50%;\\n  top: 50%;\\n  transition: background-color .2s ease-in-out, opacity .2s ease-in-out;\\n}\\n\\n.vce-faq-toggle-icon::before {\\n  height: 2px;\\n  width: 10px;\\n}\\n\\n.vce-faq-toggle-icon::after {\\n  height: 10px;\\n  width: 2px;\\n  opacity: 1;\\n}\\n\\n.vce-faq-toggle-state--opened .vce-faq-toggle-icon::after {\\n  opacity: 0;\\n}\\n\\n.vce-faq-toggle-text-block {\\n  padding-left: 33px;\\n}\\n\\n.vce-faq-toggle-shape--rounded .vce-faq-toggle-icon {\\n  border-radius: 5px;\\n}\\n\\n.vce-faq-toggle-shape--round .vce-faq-toggle-icon {\\n  border-radius: 50%;\\n}\\n\\n.vce-faq-toggle-inner > :nth-child(even) {\\n  display: none;\\n}\\n\"\n\n//# sourceURL=webpack:///./faqToggle/styles.css?../../node_modules/raw-loader/index.js");

/***/ }),

/***/ "./faqToggle/settings.json":
/*!*********************************!*\
  !*** ./faqToggle/settings.json ***!
  \*********************************/
/***/ (function(module) {

"use strict";
eval("module.exports = JSON.parse('{\"groups\":{\"type\":\"string\",\"access\":\"protected\",\"value\":\"Buttons\"},\"titleText\":{\"type\":\"string\",\"access\":\"public\",\"value\":\"What is frequently asked questions?\",\"options\":{\"label\":\"Title text\",\"dynamicField\":true}},\"elementTag\":{\"type\":\"dropdown\",\"access\":\"public\",\"value\":\"h3\",\"options\":{\"label\":\"Element tag\",\"values\":[{\"label\":\"h1\",\"value\":\"h1\"},{\"label\":\"h2\",\"value\":\"h2\"},{\"label\":\"h3\",\"value\":\"h3\"},{\"label\":\"h4\",\"value\":\"h4\"},{\"label\":\"h5\",\"value\":\"h5\"},{\"label\":\"h6\",\"value\":\"h6\"},{\"label\":\"p\",\"value\":\"p\"},{\"label\":\"div\",\"value\":\"div\"}]}},\"textBlock\":{\"type\":\"htmleditor\",\"access\":\"public\",\"value\":\"<p>Frequently asked questions (FAQ) or Questions and Answers (Q&A), are listed questions and answers, all supposed to be commonly asked in some context, and pertaining to a particular topic.</p>\",\"options\":{\"label\":\"Text block\",\"inline\":true,\"dynamicField\":true,\"skinToggle\":\"darkTextSkin\"}},\"darkTextSkin\":{\"type\":\"toggleSmall\",\"access\":\"public\",\"value\":false},\"iconColor\":{\"type\":\"color\",\"access\":\"public\",\"value\":\"#fff\",\"options\":{\"label\":\"Icon color\",\"cssMixin\":{\"mixin\":\"color\",\"property\":\"color\",\"namePattern\":\"[\\\\\\\\da-f]+\"}}},\"shape\":{\"type\":\"dropdown\",\"access\":\"public\",\"value\":\"rounded\",\"options\":{\"label\":\"Style\",\"values\":[{\"label\":\"None\",\"value\":\"none\"},{\"label\":\"Square\",\"value\":\"square\"},{\"label\":\"Rounded\",\"value\":\"rounded\"},{\"label\":\"Round\",\"value\":\"round\"}]}},\"shapeColor\":{\"type\":\"color\",\"access\":\"public\",\"value\":\"#1D64C5\",\"options\":{\"label\":\"Shape color\",\"cssMixin\":{\"mixin\":\"shapeColor\",\"property\":\"shapeColor\",\"namePattern\":\"[\\\\\\\\da-f]+\"},\"onChange\":{\"rules\":{\"shape\":{\"rule\":\"valueIn\",\"options\":{\"values\":[\"square\",\"rounded\",\"round\"]}}},\"actions\":[{\"action\":\"toggleVisibility\"}]}}},\"customHoverColors\":{\"type\":\"toggle\",\"access\":\"public\",\"value\":false,\"options\":{\"label\":\"Custom hover colors\"}},\"iconHoverColor\":{\"type\":\"color\",\"access\":\"public\",\"value\":\"#e6e6e6\",\"options\":{\"label\":\"Icon hover color\",\"cssMixin\":{\"mixin\":\"hoverColor\",\"property\":\"hoverColor\",\"namePattern\":\"[\\\\\\\\da-f]+\"},\"onChange\":{\"rules\":{\"customHoverColors\":{\"rule\":\"toggle\"}},\"actions\":[{\"action\":\"toggleVisibility\"}]}}},\"shapeHoverColor\":{\"type\":\"color\",\"access\":\"public\",\"value\":\"#164d99\",\"options\":{\"label\":\"Shape color\",\"cssMixin\":{\"mixin\":\"shapeHoverColor\",\"property\":\"shapeHoverColor\",\"namePattern\":\"[\\\\\\\\da-f]+\"},\"onChange\":{\"rules\":{\"customHoverColors\":{\"rule\":\"toggle\"},\"shape\":{\"rule\":\"valueIn\",\"options\":{\"values\":[\"square\",\"rounded\",\"round\"]}}},\"actions\":[{\"action\":\"toggleVisibility\"}]}}},\"designOptions\":{\"type\":\"designOptions\",\"access\":\"public\",\"value\":{},\"options\":{\"label\":\"Design Options\"}},\"editFormTab1\":{\"type\":\"group\",\"access\":\"protected\",\"value\":[\"titleText\",\"elementTag\",\"textBlock\",\"iconColor\",\"shape\",\"shapeColor\",\"customHoverColors\",\"iconHoverColor\",\"shapeHoverColor\",\"metaCustomId\",\"customClass\"],\"options\":{\"label\":\"General\"}},\"metaEditFormTabs\":{\"type\":\"group\",\"access\":\"protected\",\"value\":[\"editFormTab1\",\"designOptions\"]},\"relatedTo\":{\"type\":\"group\",\"access\":\"protected\",\"value\":[\"General\"]},\"customClass\":{\"type\":\"string\",\"access\":\"public\",\"value\":\"\",\"options\":{\"label\":\"Extra class name\",\"description\":\"Add an extra class name to the element and refer to it from the custom CSS option.\"}},\"metaCustomId\":{\"type\":\"customId\",\"access\":\"public\",\"value\":\"\",\"options\":{\"label\":\"Element ID\",\"description\":\"Apply a unique ID to the element to link it directly by using #your_id (for element ID use lowercase input only).\"}},\"sharedAssetsLibrary\":{\"access\":\"protected\",\"type\":\"string\",\"value\":{\"libraries\":[{\"libsNames\":[\"faqToggle\"]}]}},\"metaPublicJs\":{\"access\":\"protected\",\"type\":\"string\",\"value\":{\"libraries\":[{\"libPaths\":\"public/dist/faqToggle.min.js\"}]}},\"tag\":{\"access\":\"protected\",\"type\":\"string\",\"value\":\"faqToggle\"}}');\n\n//# sourceURL=webpack:///./faqToggle/settings.json?");

/***/ })

},[['./faqToggle/index.js']]]);