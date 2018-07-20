/* filter menu */
			function openNav() {
				document.getElementById("mySidenav").style.width = "250px";
				document.getElementById("main").style.marginLeft = "250px";

             
			}

            function openNav2() {
                   document.getElementById("mySidenav2").style.width = "250px";
                document.getElementById("main2").style.marginLeft = "250px";
            }


            function openNav3() {
                   document.getElementById("mySidenav3").style.width = "250px";
                document.getElementById("main3").style.marginLeft = "250px";
            }

            function openNav4() {
                   document.getElementById("mySidenav4").style.width = "250px";
                document.getElementById("main4").style.marginLeft = "250px";
            }

            function openNav5() {
                   document.getElementById("mySidenav5").style.width = "250px";
                document.getElementById("main5").style.marginLeft = "250px";
            }

			/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
			function closeNav() {
				document.getElementById("mySidenav").style.width = "0";
				document.getElementById("main").style.marginLeft = "0";
              
			}


            function closeNav2() {
                document.getElementById("mySidenav2").style.width = "0";
                document.getElementById("main2").style.marginLeft = "0";
              
            }

            function closeNav3() {
                document.getElementById("mySidenav3").style.width = "0";
                document.getElementById("main3").style.marginLeft = "0";
              
            }


            function closeNav4() {
                document.getElementById("mySidenav4").style.width = "0";
                document.getElementById("main4").style.marginLeft = "0";
              
            }

            function closeNav5() {
                document.getElementById("mySidenav5").style.width = "0";
                document.getElementById("main5").style.marginLeft = "0";
              
            }

			/* filter */
            $(document).ready(function(){

                $(".category-button").click(function(){

                    var filterValue = $(this).attr('data-filter');

                    if(filterValue == "all")
                    {
                        $(".all").show("slow");
                    }
                    else
                    {
                        $(".all").not('.'+filterValue).hide("slow");

                        $(".all").filter('.'+filterValue).show("slow");
                    }
                });
            });