<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jquery-3.4.1.min.js"></script>
    <script lang="javascript" src="sheetjs-master/dist/xlsx.full.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/exceljs/dist/exceljs.min.js"></script>
    <script src="jquery-ui.js"></script>
    <script src="jquery.json.min.js"></script>

    <link rel="stylesheet" type="text/css" href="node_modules/DataTables/datatables.min.css" />

    <script type="text/javascript" src="node_modules/DataTables/datatables.min.js"></script>

    <link href="node_modules/tableexport/dist/css/tableexport.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <style>
        #nxt {
            text-decoration: none;
            display: inline-block;
            padding: 7.5px 14px;
            outline: none;
            border: none;
            font-size: 16px;
            margin-left: 30px;
        }

        #nxt:hover {
            background-color: #ddd;
            color: black;
        }

        .next {
            background-color: rgb(72, 75, 117);
            color: white;
            border-radius: 10px;
            float: right;
        }

        .content .tbSize {
            width: 95%;
            height: 450px;
            overflow: auto;
        }

        .cover .up {
            height: 10%;
            width: 100%;
            background-color: rgba(219, 219, 219, 0.712);
            padding-top: 1%;
            padding-bottom: 1%;
            padding-left: 4%;
            font-size: larger;
            font-weight: bold;
        }

        .cover .content {
            height: 90%;
            width: 100%;
            padding-top: 2%;
            padding-left: 5%;
        }

        .cover {
            width: max-width;
            height: max-heigth;
        }

        #rawFile th {
            font-size: medium;
            font-weight: 500;
        }

        .forButton {
            float: right;
            padding: 3% 4.8%;
        }
    </style>
    <title>Other Tables</title>
</head>

<body>
    <div class="cover">
        <div class="up">Select the Table to export: <select class="Input" id="Input" style="font-size: 14px;margin-left: 1%;">
                <option value="seller_leads">seller_leads</option>
                <option value="xencall_logs">xencall_logs</option>
                <option value="raw_file">raw_file</option>
                <option value="raw_data">raw_data</option>
            </select></div>

        <div class="forButton">

            <button id="nxt" class="next" onclick="into();">Download &raquo;</button>
        </div>
    </div>

    <script>
        function into() {
            var e = document.getElementById("Input");
            var strUser = e.options[e.selectedIndex].value;
            window.location = "findtb.php?tb=" + strUser;
        }
        $(document).ready(function() {


            $('#rawFile').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
        });
    </script>
</body>

</html>