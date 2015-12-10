var DragElement = {
    help: function() {
        console.log("");
    },
    options: function() {
        console.warn("Options for DragElement are used in the following HTML attributes:\n" +
            "\'data-title\',\n" +
            "\'data-x\',\n" +
            "\'data-y\',\n" +
            "\'data-color\',\n" +
            "\'data-frameColor\',\n" +
            "\'data-exitButtonColor\',\n" +
            "\'data-exitButtonTextColor\',\n" +
            "\'data-exitButtonHoverColor\'\n");
    }
};
var ELEMENT_ARRAY = [];
(function() {
    var elements = document.getElementsByClassName("DragElement");
    for(var i = 0; i < elements.length; i++) ELEMENT_ARRAY.push(new Element(elements[i]));
})();

function getDragElement(indicator) {
    var firstChar = indicator.charAt(0);
    if(firstChar === "#") {
        for(var i=0; i<ELEMENT_ARRAY.length; i++) {
            var element = ELEMENT_ARRAY[i];
            if(element.element.id === indicator.slice(1)) return element;
        }
    }
    else if(firstChar === ".") {
        var elements = [];
        for(var i=0; i<ELEMENT_ARRAY.length; i++) {
            var element = ELEMENT_ARRAY[i];
            if(element.element.className === indicator.slice(1)) elements.push(element);
        }
        return elements;
    }
    else {
        var elements = [];
        for(var i=0; i<ELEMENT_ARRAY.length; i++) {
            var element = ELEMENT_ARRAY[i];
            if(element.element.tagName === indicator) elements.push(element);
        }
        return elements;
    }
}

function Element(element) {
    this.element = element;
    this.mousex;
    this.mousey;
    this.active = false;
    this.open = function() {
        this.element.style.display = "inline-block";
    };
    this.close = function() {
        this.element.style.display = "none";
    };
    this.createExitButton = function() {
        var button = document.createElement("div");
        button.style.display = "inline-block";
        button.style.float = "right";
        button.style.margin = "2px";
        button.style.width = "20px";
        button.style.height = "20px";
        button.style.backgroundColor = this.element.getAttribute("data-exitButtonColor") || "#ccc";
        button.onmouseover = function() {button.style.backgroundColor = this.element.getAttribute("data-exitButtonHoverColor") || "#bbb"}.bind(this);
        button.onmouseleave = function() {button.style.backgroundColor = this.element.getAttribute("data-exitButtonColor") || "#ccc"}.bind(this);
        button.style.textAlign = "center";
        button.style.fontFamily = "arial";
        button.style.color = this.element.getAttribute("data-exitButtonTextColor") || "#eee";
        button.innerHTML = "X";
        button.onmousedown = function(){this.close();}.bind(this);
        return button;
    };
    this.initialize = function() {
        var head = document.createElement("div");
        head.style.width = "100%";
        head.style.height = "24px";
        head.style.backgroundColor = this.element.getAttribute("data-frameColor") || "#eee";
        head.style.cursor = "pointer";
        head.innerHTML = this.element.getAttribute("data-title") || "";
        this.element.insertBefore(head, this.element.childNodes[0]);

        var exit = this.createExitButton();
        head.appendChild(exit);

        this.element.style.display = "inline-block";
        this.element.style.backgroundColor = this.element.getAttribute("data-color") || "white";
        this.element.style.border = "solid 1px black";

        this.element.style.position = "absolute";
        this.element.style.left = this.element.getAttribute("data-x") || (Math.floor(window.innerWidth / 2) - Math.floor(this.getCSSValue(this.element, "width") / 1.3)) + "px";
        this.element.style.top = this.element.getAttribute("data-y") || "32px";
        /*window.setTimeout(function() {
            this.element.style.height = (this.getCSSValue(this.element, "height") - 6) + "px";
        }.bind(this), 0);*/

        head.addEventListener("mousedown", function() {
            this.mousex = event.x - parseInt(this.element.style.left);
            this.mousey = parseInt(window.getComputedStyle(head).height) / 2;
            this.active = true;
            var body = document.getElementsByTagName("body")[0];
            body.appendChild(this.element);
        }.bind(this),false);
        window.addEventListener("mouseup", function() {
            this.active = false;
        }.bind(this),false);
        window.addEventListener("mousemove", function() {
            if(this.active) {
                this.element.style.left = (event.x - this.mousex) + "px";
                this.element.style.top = Math.max((event.y - this.mousey), 0) + "px";
            }
        }.bind(this), false);
    };
    this.getCSSValue = function(element, property) {
        var value = window.getComputedStyle(element).getPropertyValue(property);
        if(isNaN(parseFloat(value))) {
            if(value.indexOf("%") != -1) {
                var parent = element.parentNode;
                var pvalue = this.getCSSValue(parent, property);
                value = parseFloat(value.slice(0, -1)) / 100;
                return value * pvalue;
            }
        } else {
            return parseFloat(value);
        }
    };
    this.initialize();
}