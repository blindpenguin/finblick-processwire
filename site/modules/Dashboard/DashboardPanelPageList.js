!function(){var a=".PageListContainerPage, .PageListContainerRoot",t=".PageListActionEdit a, .PageListActionNew a",e=".PageListActionView a";function o(a,t,e){a.on("mouseenter",t,(function(a){"blank"===e&&$(a.target).attr("target","_blank"),"modal"===e&&($(a.target).addClass("pw-modal"),$(a.target).addClass("pw-modal-large"),$(a.target).removeClass("pw-modal-longclick"))}))}function n(n){var i=n.find(a),d=parseInt(n.data("parent"),10),s=n.data("show-root");i.ProcessPageList({rootPageID:d,showRootPage:s}),setTimeout((function(){!function(n){var i=n.find(a),d=n.data("edit-mode"),s=n.data("view-mode");i.data("has-events")||(o(i,t,d),o(i,e,s),i.on("pw-modal-closed",t,(function(){n.trigger("reload",{animate:!0})})),i.data("has-events",!0))}(n)}),1e3)}$(document).on("dashboard:panel(page-list)",(function(a,t){n(t.$element)}))}();