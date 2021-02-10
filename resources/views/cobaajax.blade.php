{{-- <!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 10px;
      padding: 0px;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .autocomplete {
      position: relative;
      display: inline-block;
    }

    input {
      border: none;
      background-color: #f1f1f1;
      padding: 10px;
      font-size: 16px;
      border-radius: 4px;
    }

    input[type="text"] {
      background-color: #e1f6fc;
      width: 100%;
    }

    input[type="submit"] {
      background-color: DodgerBlue;
      color: #fff;
      cursor: pointer;
    }

    .autocomplete-items {
      position: absolute;
      border-bottom: none;
      border-top: none;
      z-index: 99;
      top: 100%;
      left: 0;
      right: 0;
    }

    .autocomplete-items div {
      padding: 10px;
      cursor: pointer;
      border: 1px solid #8e26d4;
      border-bottom: 1px solid #d4d4d4;
    }

    .autocomplete-items div:hover {
      background-color: #e9e9e9;
    }

    .autocomplete-active {
      background-color: rgb(30, 255, 169) !important;
      color: #ffffff;
    }
  </style>
</head>

<body>
  <h1>Autocomplete Example</h1>
  <form autocomplete="off">
    <div class="autocomplete" style="width:300px;">
      <input id="searchField" type="text" name="animal" placeholder="Animals" />
    </div>
    <input type="submit" />
  </form>
  <script>
    function autocomplete(searchEle, arr) {
      var currentFocus;
      searchEle.addEventListener("input", function(e) {
         var divCreate,
         b,
         i,
         fieldVal = this.value;
         closeAllLists();
         if (!fieldVal) {
            return false;
         }
         currentFocus = -1;
         divCreate = document.createElement("DIV");
         divCreate.setAttribute("id", this.id + "autocomplete-list");
         divCreate.setAttribute("class", "autocomplete-items");
         this.parentNode.appendChild(divCreate);
         for (i = 0; i <arr.length; i++) {
            if ( arr[i].substr(0, fieldVal.length).toUpperCase() == fieldVal.toUpperCase() ) {
               b = document.createElement("DIV");
               b.innerHTML = "<strong>" + arr[i].substr(0, fieldVal.length) + "</strong>";
               b.innerHTML += arr[i].substr(fieldVal.length);
               b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
               b.addEventListener("click", function(e) {
                  searchEle.value = this.getElementsByTagName("input")[0].value;
                  closeAllLists();
               });
               divCreate.appendChild(b);
            }
         }
      });
      searchEle.addEventListener("keydown", function(e) {
         var autocompleteList = document.getElementById(
            this.id + "autocomplete-list"
         );
         if (autocompleteList)
            autocompleteList = autocompleteList.getElementsByTagName("div");
         if (e.keyCode == 40) {
            currentFocus++;
            addActive(autocompleteList);
         }
         else if (e.keyCode == 38) {
            //up
            currentFocus--;
            addActive(autocompleteList);
         }
         else if (e.keyCode == 13) {
            e.preventDefault();
            if (currentFocus > -1) {
               if (autocompleteList) autocompleteList[currentFocus].click();
            }
         }
      });
      function addActive(autocompleteList) {
         if (!autocompleteList) return false;
            removeActive(autocompleteList);
         if (currentFocus >= autocompleteList.length) currentFocus = 0;
         if (currentFocus < 0) currentFocus = autocompleteList.length - 1;
         autocompleteList[currentFocus].classList.add("autocomplete-active");
      }
      function removeActive(autocompleteList) {
         for (var i = 0; i < autocompleteList.length; i++) {
            autocompleteList[i].classList.remove("autocomplete-active");
         }
      }
      function closeAllLists(elmnt) {
         var autocompleteList = document.getElementsByClassName(
            "autocomplete-items"
         );
         for (var i = 0; i < autocompleteList.length; i++) {
            if (elmnt != autocompleteList[i] && elmnt != searchEle) {
               autocompleteList[i].parentNode.removeChild(autocompleteList[i]);
            }
         }
      }
      document.addEventListener("click", function(e) {
         closeAllLists(e.target);
      });
   }
   var animals = ["giraffe","tiger", "lion", "dog","cow","bull","cat","cheetah"];
   autocomplete(document.getElementById("searchField"), animals);
  </script>
</body>

</html> --}}


{{-- Data FILTER HTML & CSS --}}
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <style>
      section {
         display: block;
         float: left;
         border: 2px solid green;
         min-height: 300px;
         width: 100%;
         border-radius: 4px;
      }

      a {
         display: block;
         float: left;
         width: 25%;
         text-decoration: none;
         text-align: center;
         padding: 5px 0;
         color: white;
         background: #1271C7;
      }

      div {
         display: block;
         float: left;
         height: 40px;
         width: 40px;
         border: 1px solid black;
         margin: 10px;
         -webkit-transition: all .8s linear;
         -moz-transition: all .8s linear;
         -o-transition: all .8s linear;
         -ms-transition: all .8s linear;
         transition: all .8s linear;
         margin-top: 20px;
      }

      div[data-filter="red"] {
         background: red;

      }

      div[data-filter="green"] {
         background: green;
      }

      div[data-filter="blue"] {
         background: blue;
      }



      a:focus[data-filter] {
         opacity: .8;
         outline: none;
      }

      a[data-filter="red"]:focus~div:not([data-filter="red"]) {
         height: 0px;
         width: 0px;
         border: none;
         margin: 0;
      }

      a[data-filter="green"]:focus~div:not([data-filter="green"]) {
         height: 0px;
         width: 0px;
         border: none;
         margin: 0;
      }

      a[data-filter="blue"]:focus~div:not([data-filter="blue"]) {
         height: 0px;
         width: 0px;
         border: none;
         margin: 0;
      }
   </style>
</head>

<body>
   <section>
      <a href="#" data-filter="all" tabindex="-1">ALL</a>
      <a href="#" data-filter="red" tabindex="-1">RED</a>
      <a href="#" data-filter="green" tabindex="-1">GREEN</a>
      <a href="#" data-filter="blue" tabindex="-1">BLUE</a>

      <div data-filter="red"></div>
      <div data-filter="blue"></div>
      <div data-filter="red"></div>
      <div data-filter="blue"></div>
      <div data-filter="green"></div>
      <div data-filter="red"></div>
      <div data-filter="red"></div>
      <div data-filter="red"></div>
      <div data-filter="blue"></div>
      <div data-filter="green"></div>
      <div data-filter="blue"></div>
      <div data-filter="green"></div>
      <div data-filter="green"></div>
   </section>
</body>

</html>