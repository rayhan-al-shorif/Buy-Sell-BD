/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/admin/slider.js":
/*!**************************************!*\
  !*** ./resources/js/admin/slider.js ***!
  \**************************************/
/***/ (() => {

eval("$(document).ready(function () {\n  handleAddBtn();\n  handleEditBtn();\n  handleDeleteBtn();\n  handleCheckBtn();\n});\nfunction handleAddBtn() {\n  $('.addBtn').on('click', function () {\n    $('#for_update').html('');\n    $('.slider-title').text('Add New Slider');\n    $('#title').val('');\n    $('#description').val('');\n  });\n}\nfunction handleEditBtn() {\n  $('.editBtn').on('click', function () {\n    tr = $(this).closest('tr');\n    var id = tr.attr('id');\n    $('#for_update').html(\"<input type=\\\"hidden\\\" name=\\\"slider_id\\\" value=\\\"\".concat(id, \"\\\">\"));\n    $('.slider-title').text('Update Slider');\n    $('#title').val(tr.find('td:eq(2)').text().trim());\n    $('#description').val(tr.find('td:eq(3)').text().trim());\n  });\n}\nfunction handleDeleteBtn() {\n  $('.deleteBtn').on('click', function () {\n    tr = $(this).closest('tr');\n    var id = tr.attr('id');\n    Swal.fire({\n      title: 'Are you sure?',\n      text: \"You won't be able to revert this!\",\n      icon: 'warning',\n      showCancelButton: true,\n      confirmButtonColor: '#3085d6',\n      cancelButtonColor: '#d33',\n      confirmButtonText: 'Yes, delete it!'\n    }).then(function (result) {\n      if (result.isConfirmed) {\n        axios[\"delete\"](\"/user/slider/\".concat(id, \"/delete/\")).then(function (response) {\n          tr.remove();\n          Swal.fire('Deleted!', 'Your file has been deleted.', 'success');\n        });\n      } else {\n        Swal.fire('Cancelled', 'Your imaginary file is safe :)', 'error');\n      }\n    });\n  });\n}\nfunction handleCheckBtn() {\n  $(\"#checkbox-all\").on(\"change\", function () {\n    $(this).toggleClass(\"checked\");\n    if ($(this).hasClass(\"checked\")) {\n      $(\".sliderTableBody tr td .check\").each(function () {\n        $(this).find(\"input\").addClass('checked');\n      });\n    } else {\n      $(\".sliderTableBody tr td\").find(\".check\").each(function () {\n        $(this).find(\"input\").removeClass('checked');\n      });\n    }\n  });\n  $(\".checkbox\").on('change', function () {\n    $(this).toggleClass(\"checked\");\n    $(\".sliderTableBody tr td .check\").each(function () {\n      var isChecked = $(this).find(\"input\").hasClass('checked');\n      if (!isChecked) {\n        $(\"#checkbox-all\").removeClass(\"checked\");\n        return false;\n      }\n    });\n  });\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYWRtaW4vc2xpZGVyLmpzLmpzIiwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJoYW5kbGVBZGRCdG4iLCJoYW5kbGVFZGl0QnRuIiwiaGFuZGxlRGVsZXRlQnRuIiwiaGFuZGxlQ2hlY2tCdG4iLCJvbiIsImh0bWwiLCJ0ZXh0IiwidmFsIiwidHIiLCJjbG9zZXN0IiwiaWQiLCJhdHRyIiwiZmluZCIsInRyaW0iLCJTd2FsIiwiZmlyZSIsInRpdGxlIiwiaWNvbiIsInNob3dDYW5jZWxCdXR0b24iLCJjb25maXJtQnV0dG9uQ29sb3IiLCJjYW5jZWxCdXR0b25Db2xvciIsImNvbmZpcm1CdXR0b25UZXh0IiwidGhlbiIsInJlc3VsdCIsImlzQ29uZmlybWVkIiwiYXhpb3MiLCJyZXNwb25zZSIsInJlbW92ZSIsInRvZ2dsZUNsYXNzIiwiaGFzQ2xhc3MiLCJlYWNoIiwiYWRkQ2xhc3MiLCJyZW1vdmVDbGFzcyIsImlzQ2hlY2tlZCJdLCJzb3VyY2VSb290IjoiIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL2FkbWluL3NsaWRlci5qcz82Y2IwIl0sInNvdXJjZXNDb250ZW50IjpbIiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcbiAgICBoYW5kbGVBZGRCdG4oKTtcbiAgICBoYW5kbGVFZGl0QnRuKCk7XG4gICAgaGFuZGxlRGVsZXRlQnRuKCk7XG4gICAgaGFuZGxlQ2hlY2tCdG4oKTtcbn0pO1xuZnVuY3Rpb24gaGFuZGxlQWRkQnRuKCl7XG4gICAgJCgnLmFkZEJ0bicpLm9uKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgJCgnI2Zvcl91cGRhdGUnKS5odG1sKCcnKTtcbiAgICAgICAgJCgnLnNsaWRlci10aXRsZScpLnRleHQoJ0FkZCBOZXcgU2xpZGVyJyk7XG4gICAgICAgICQoJyN0aXRsZScpLnZhbCgnJyk7XG4gICAgICAgICQoJyNkZXNjcmlwdGlvbicpLnZhbCgnJyk7XG4gICAgfSk7XG59XG5mdW5jdGlvbiBoYW5kbGVFZGl0QnRuKCl7XG4gICAgJCgnLmVkaXRCdG4nKS5vbignY2xpY2snLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgIHRyID0gJCh0aGlzKS5jbG9zZXN0KCd0cicpO1xuICAgICAgICB2YXIgaWQgPSB0ci5hdHRyKCdpZCcpO1xuICAgICAgICAkKCcjZm9yX3VwZGF0ZScpLmh0bWwoYDxpbnB1dCB0eXBlPVwiaGlkZGVuXCIgbmFtZT1cInNsaWRlcl9pZFwiIHZhbHVlPVwiJHtpZH1cIj5gKTtcbiAgICAgICAgJCgnLnNsaWRlci10aXRsZScpLnRleHQoJ1VwZGF0ZSBTbGlkZXInKTtcbiAgICAgICAgJCgnI3RpdGxlJykudmFsKHRyLmZpbmQoJ3RkOmVxKDIpJykudGV4dCgpLnRyaW0oKSk7XG4gICAgICAgICQoJyNkZXNjcmlwdGlvbicpLnZhbCh0ci5maW5kKCd0ZDplcSgzKScpLnRleHQoKS50cmltKCkpO1xuICAgIH0pO1xufVxuXG5mdW5jdGlvbiBoYW5kbGVEZWxldGVCdG4oKXtcbiAgICAgJCgnLmRlbGV0ZUJ0bicpLm9uKCdjbGljaycsZnVuY3Rpb24oKXtcbiAgICAgICAgdHIgPSAkKHRoaXMpLmNsb3Nlc3QoJ3RyJyk7XG4gICAgICAgIHZhciBpZCA9IHRyLmF0dHIoJ2lkJyk7XG4gICAgICAgIFN3YWwuZmlyZSh7XG4gICAgICAgIHRpdGxlOiAnQXJlIHlvdSBzdXJlPycsXG4gICAgICAgIHRleHQ6IFwiWW91IHdvbid0IGJlIGFibGUgdG8gcmV2ZXJ0IHRoaXMhXCIsXG4gICAgICAgIGljb246ICd3YXJuaW5nJyxcbiAgICAgICAgc2hvd0NhbmNlbEJ1dHRvbjogdHJ1ZSxcbiAgICAgICAgY29uZmlybUJ1dHRvbkNvbG9yOiAnIzMwODVkNicsXG4gICAgICAgIGNhbmNlbEJ1dHRvbkNvbG9yOiAnI2QzMycsXG4gICAgICAgIGNvbmZpcm1CdXR0b25UZXh0OiAnWWVzLCBkZWxldGUgaXQhJ1xuICAgICAgICB9KS50aGVuKChyZXN1bHQpID0+IHtcbiAgICAgICAgaWYgKHJlc3VsdC5pc0NvbmZpcm1lZCkge1xuICAgICAgICAgICAgYXhpb3MuZGVsZXRlKGAvdXNlci9zbGlkZXIvJHtpZH0vZGVsZXRlL2ApXG4gICAgICAgICAgICAudGhlbihmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICB0ci5yZW1vdmUoKTtcbiAgICAgICAgICAgICAgICBTd2FsLmZpcmUoXG4gICAgICAgICAgICAgICAgJ0RlbGV0ZWQhJyxcbiAgICAgICAgICAgICAgICAnWW91ciBmaWxlIGhhcyBiZWVuIGRlbGV0ZWQuJyxcbiAgICAgICAgICAgICAgICAnc3VjY2VzcydcbiAgICAgICAgICAgICAgICApXG4gICAgICAgICAgICB9KVxuICAgICAgICB9ZWxzZXtcbiAgICAgICAgU3dhbC5maXJlKFxuICAgICAgICAnQ2FuY2VsbGVkJyxcbiAgICAgICAgJ1lvdXIgaW1hZ2luYXJ5IGZpbGUgaXMgc2FmZSA6KScsXG4gICAgICAgICdlcnJvcidcbiAgICAgICAgKVxuICAgICAgICB9XG4gICAgICAgIH0pXG4gICAgfSlcbn1cblxuZnVuY3Rpb24gaGFuZGxlQ2hlY2tCdG4oKXtcblxuICAgICQoXCIjY2hlY2tib3gtYWxsXCIpLm9uKFwiY2hhbmdlXCIsIGZ1bmN0aW9uKCl7XG4gICAgICAgICQodGhpcykudG9nZ2xlQ2xhc3MoXCJjaGVja2VkXCIpO1xuICAgICAgICBpZiAoJCh0aGlzKS5oYXNDbGFzcyhcImNoZWNrZWRcIikpIHtcbiAgICAgICAgICAgICQoXCIuc2xpZGVyVGFibGVCb2R5IHRyIHRkIC5jaGVja1wiKS5lYWNoKGZ1bmN0aW9uKCl7XG4gICAgICAgICAgICAgICAgJCh0aGlzKS5maW5kKFwiaW5wdXRcIikuYWRkQ2xhc3MoJ2NoZWNrZWQnKTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9ZWxzZXtcbiAgICAgICAgICAgICQoXCIuc2xpZGVyVGFibGVCb2R5IHRyIHRkXCIpLmZpbmQoXCIuY2hlY2tcIikuZWFjaChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgJCh0aGlzKS5maW5kKFwiaW5wdXRcIikucmVtb3ZlQ2xhc3MoJ2NoZWNrZWQnKTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG4gICAgfSk7XG5cbiAgICAkKFwiLmNoZWNrYm94XCIpLm9uKCdjaGFuZ2UnLCBmdW5jdGlvbigpe1xuICAgICAgICAkKHRoaXMpLnRvZ2dsZUNsYXNzKFwiY2hlY2tlZFwiKTtcbiAgICAgICAgJChcIi5zbGlkZXJUYWJsZUJvZHkgdHIgdGQgLmNoZWNrXCIpLmVhY2goZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgbGV0IGlzQ2hlY2tlZCA9ICQodGhpcykuZmluZChcImlucHV0XCIpLmhhc0NsYXNzKCdjaGVja2VkJyk7XG4gICAgICAgICAgICBpZiAoIWlzQ2hlY2tlZCl7XG4gICAgICAgICAgICAgICAgJChcIiNjaGVja2JveC1hbGxcIikucmVtb3ZlQ2xhc3MoXCJjaGVja2VkXCIpO1xuICAgICAgICAgICAgICAgIHJldHVybiBmYWxzZTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgfSk7XG59XG4iXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUNDLFFBQVEsQ0FBQyxDQUFDQyxLQUFLLENBQUMsWUFBWTtFQUMxQkMsWUFBWSxFQUFFO0VBQ2RDLGFBQWEsRUFBRTtFQUNmQyxlQUFlLEVBQUU7RUFDakJDLGNBQWMsRUFBRTtBQUNwQixDQUFDLENBQUM7QUFDRixTQUFTSCxZQUFZLEdBQUU7RUFDbkJILENBQUMsQ0FBQyxTQUFTLENBQUMsQ0FBQ08sRUFBRSxDQUFDLE9BQU8sRUFBRSxZQUFZO0lBQ2pDUCxDQUFDLENBQUMsYUFBYSxDQUFDLENBQUNRLElBQUksQ0FBQyxFQUFFLENBQUM7SUFDekJSLENBQUMsQ0FBQyxlQUFlLENBQUMsQ0FBQ1MsSUFBSSxDQUFDLGdCQUFnQixDQUFDO0lBQ3pDVCxDQUFDLENBQUMsUUFBUSxDQUFDLENBQUNVLEdBQUcsQ0FBQyxFQUFFLENBQUM7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\n//# sourceURL=webpack-internal:///./resources/js/admin/slider.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/admin/slider.js"]();
/******/ 	
/******/ })()
;