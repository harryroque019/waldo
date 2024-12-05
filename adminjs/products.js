      // Clear default value when the textarea is focused
      function clearDefaultValue(element) {
        if (
            element.value === "Product Name:" ||
            element.value === "Product Price:" ||
            element.value === "Category:" ||
            element.value === "Stock:" ||
            element.value === "Describe your product.."
        ) {
            element.value = "";
        }
    }

    // Restore default value when the textarea loses focus
    function restoreDefaultValue(element) {
        if (element.value === "") {
            if (element.id === "productNameInput") {
                element.value = "Product Name:";
            } else if (element.id === "productPriceInput") {
                element.value = "Product Price:";
            } else if (element.id === "productDescInput") {
                element.value = "Describe your product..";
            }else if (element.id === "productCategoryInput") {
                element.value = "Category:";
            }else if (element.id === "productStockInput") {
                element.value = "Stock:";
            }
        }
    }