/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _js_modules_dropdown__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../js/modules/dropdown */ "./resources/js/modules/dropdown.js");
/* harmony import */ var _modules_alert__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/alert */ "./resources/js/modules/alert.js");
/* harmony import */ var _modules_swiper__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/swiper */ "./resources/js/modules/swiper.js");
/* harmony import */ var _modules_swiper__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_modules_swiper__WEBPACK_IMPORTED_MODULE_2__);



(0,_modules_alert__WEBPACK_IMPORTED_MODULE_1__.initAlert)();
(0,_js_modules_dropdown__WEBPACK_IMPORTED_MODULE_0__["default"])();

/***/ }),

/***/ "./resources/js/modules/alert.js":
/*!***************************************!*\
  !*** ./resources/js/modules/alert.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initAlert: () => (/* binding */ initAlert)
/* harmony export */ });
var alertTrigger = document.querySelectorAll(".alert-trigger");
var alert = document.getElementById("alert");
var titleEl = alert.querySelector("#title");
var descriptionEl = alert.querySelector("#description");
var cancelBtn = alert.querySelector("#cancel");
var confirmBtn = alert.querySelector("#confirm");
function showAlert() {
  alert.style.zIndex = "30";
  alert.style.opacity = "1";
}
function hideAlert() {
  alert.style.zIndex = "0";
  alert.style.opacity = "0";
}
function handleCancelClick(trigger) {
  hideAlert();
  trigger.addEventListener("click", handleTriggerClick, {
    once: true
  });
}
function handleConfirmBtn(trigger) {
  hideAlert();
  trigger.click();
}
function handleAllClicks(event, trigger) {
  if (!alert.contains(event.target)) {
    handleCancelClick(trigger);
  } else if (event.target !== cancelBtn && event.target !== confirmBtn) {
    document.addEventListener("click", function (e) {
      return handleAllClicks(e, trigger);
    }, {
      once: true
    });
  }
}
function handleTriggerClick(event) {
  event.preventDefault();
  var button = event.target;
  var title = button.dataset.title;
  var description = button.dataset.description;
  titleEl.innerHTML = title;
  descriptionEl.innerHTML = description;
  showAlert();
  setTimeout(function () {
    document.addEventListener("click", function (e) {
      return handleAllClicks(e, event.target);
    }, {
      once: true
    });
  }, 200);
  cancelBtn.addEventListener("click", function () {
    return handleCancelClick(event.target);
  }, {
    once: true
  });
  confirmBtn.addEventListener("click", function () {
    return handleConfirmBtn(event.target);
  }, {
    once: true
  });
}
function initAlert() {
  if (alertTrigger.length === 0 || !alert) return;
  alertTrigger.forEach(function (trigger) {
    trigger.addEventListener("click", handleTriggerClick, {
      once: true
    });
  });
}

/***/ }),

/***/ "./resources/js/modules/dropdown.js":
/*!******************************************!*\
  !*** ./resources/js/modules/dropdown.js ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ dropdown)
/* harmony export */ });
function dropdown() {
  var dropdownBtn = document.getElementById("user-dropdown-activator");
  var dropdown = document.getElementById("user-dropdown");
  dropdownBtn.addEventListener("click", function () {
    dropdown.classList.toggle("hidden");
    if (!dropdown.classList.contains("hidden")) {
      setTimeout(function () {
        document.addEventListener("click", function (e) {
          if (!dropdown.contains(e.target)) {
            dropdown.classList.add("hidden");
          }
        }, {
          once: true
        });
      }, 200);
    }
  });
}

/***/ }),

/***/ "./resources/js/modules/swiper.js":
/*!****************************************!*\
  !*** ./resources/js/modules/swiper.js ***!
  \****************************************/
/***/ (() => {

var swiper1 = new Swiper(".movies-swiper-1", {
  // Optional parameters
  direction: "horizontal",
  slidesPerView: 2,
  spaceBetween: 10,
  centeredSlides: true,
  loop: true,
  keyboard: {
    enabled: true
  },
  breakpoints: {
    1024: {
      slidesPerView: 4
    },
    640: {
      slidesPerView: 3
    }
  },
  // Navigation arrows
  navigation: {
    nextEl: "#swiper-btn-next-1",
    prevEl: "#swiper-btn-prev-1"
  }
});
var swiper2 = new Swiper(".movies-swiper-2", {
  // Optional parameters
  direction: "horizontal",
  slidesPerView: 2,
  spaceBetween: 10,
  centeredSlides: true,
  loop: true,
  keyboard: {
    enabled: true
  },
  breakpoints: {
    1024: {
      slidesPerView: 4
    },
    640: {
      slidesPerView: 3
    }
  },
  // Navigation arrows
  navigation: {
    nextEl: "#swiper-btn-next-2",
    prevEl: "#swiper-btn-prev-2"
  }
});

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;