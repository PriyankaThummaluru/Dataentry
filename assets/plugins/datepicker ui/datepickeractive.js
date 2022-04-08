 $(document).ready(function () {

                $(".datepicker").datepicker({
                    dateFormat: "dd-mm-yy",
//                    setDate: new Date(),
                    changeMonth: true,
                    changeYear: true,
//                    mindate: new Date('01-01-2021'),
//                    maxdate: new Date(today)
//                    onSelect: function (selected) {
//
//                        $(".datepicker").datepicker("option", "minDate", selected)
//
//                    }

                }).datepicker("setDate",'now');

//                $("#todt").datepicker({
//                    dateFormat: "yy-mm-dd",
//                    changeMonth: true,
//                    changeYear: true,
//                    onSelect: function (selected) {
//
//                        $("#fromdt").datepicker("option", "maxDate", selected)
//
//                    }
//
//                });

            });


