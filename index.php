<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    .pointer {
      cursor: pointer;
    }

    body {
      font-family: Phetsarath OT
    }

    .tb-header {
      width: 200px;
      text-align: center;
    }

    .text-center {
      text-align: center
    }

    .table-content {
      background-color: rgb(202, 217, 245);
      width: 900px;
    }
  </style>
</head>

<body>
  <br>

  <div style="text-align: center">
    <h3>
      ການຄໍານວນແຂງກັບເວລາ
    </h3>
  </div>
  <br>
  <div class=" container form-group">
    <div class="row">
      <div class="col-md-2">
        <b>ກໍານົດເວລາໃນການຄໍານວນ</b>
      </div>
      <div class="col-md-4">
        <input type="number" value="5" id="calculatTime" class="form-control">
      </div>
      <div class="col-md-1">
        ວິນາທີ
      </div>
    </div>
  </div>
  <br>
  <div style="margin-left: 10%; margin-top: 2%">
    <div>
      <b>ເລືອກຫຼັກຕົວຕັ້ງໃນການຄໍານວນ : </b> &nbsp;&nbsp;&nbsp;
      <input type="radio" value="100" id="type_2" name="operatingtyType" class="pointer" checked> ຫຼັກສິບ &nbsp;&nbsp;&nbsp;
      <input type="radio" value="1000" id="type_3" name="operatingtyType" class="pointer"> ຫຼັກຮ້ອຍ &nbsp;&nbsp;&nbsp;
      <input type="radio" value="10000" id="type_4" name="operatingtyType" class="pointer"> ຫຼັກພັນ &nbsp;&nbsp;&nbsp;
    </div>
    <br>

    <div>
      <b>ເລືອກຮູບແບບການຄໍານວນ : </b> &nbsp;&nbsp;&nbsp;
      <input type="radio" value="1" id="plus" name="operatingChoice" checked class="pointer"> + &nbsp;&nbsp;&nbsp;
      <input type="radio" value="2" id="minus" name="operatingChoice" class="pointer"> - &nbsp;&nbsp;&nbsp;
      <input type="radio" value="3" id="multiply" name="operatingChoice" class="pointer"> x &nbsp;&nbsp;&nbsp;
      <input type="radio" value="4" id="divis" name="operatingChoice" class="pointer"> / &nbsp;&nbsp;&nbsp;
      <input type="radio" value="5" id="mode" name="operatingChoice" class="pointer"> % &nbsp;&nbsp;&nbsp;
    </div>
    <br>

    <div class="table-content">
      <br>
      <table>
        <thead>
          <th>
            <div class="tb-header">ສໍານວນທີ 1</div>
          </th>
          <th>
            <div class="tb-header">ສໍານວນທີ 2</div>
          </th>
          <th>
            <div style="width: 30px;"></div>
          </th>
          <th>
            <div class="tb-header">ຜົນການຄໍານວນ</div>
          </th>
        </thead>
        <tbody>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td class="text-center">
              <span id="demo1" style="font-size:24px"></span>
            </td>
            <td class="text-center">
              <span id="demo2" style="font-size:24px; margin-left:5%"></span>
            </td>
            <td class="text-center"> = </td>
            <td class="text-center">
              <span id="demo3" style="font-size:24px; margin-left:5%"></span>
            </td>
          </tr>
        </tbody>
      </table>

    </div>

  </div>
  <br>

  <div style="width:100%; margin-left: 10%; margin-top: 2%">
    <span id="demo1" style="font-size:24px"></span>
    <span id="demo2" style="font-size:24px; margin-left:5%"></span>
    <span id="demo3" style="font-size:24px; margin-left:5%"></span>
  </div>

  <div style="text-align: center; margin-bottom: 20%">
    <button class="btn btn-success" onclick="myFunction()" style="font-size: 20px; font-weight: bold; color: red; width: 20%">Start</button>
  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script>

    function firstFunction(operatingType_value) {
      var x = document.getElementById("demo1")
      x.innerHTML = Math.floor((Math.random() * operatingType_value) + 1);
    }

    function secondFunction(operatingType_value) {
      var x = document.getElementById("demo2")
      x.innerHTML = Math.floor((Math.random() * operatingType_value) + 1);
    }

    function SetTimeFunction(operatingChoice_value) {
      var myCalculatTime = document.getElementById('calculatTime').value;
      setTimeout(function () {
        var firstnum = parseInt(document.getElementById("demo1").innerHTML);
        var secondnum = parseInt(document.getElementById("demo2").innerHTML);

        var operat;
        if (operatingChoice_value === '1') {
          operat = firstnum + secondnum;
        }
        else if (operatingChoice_value === '2') {
          operat = firstnum - secondnum;
        }
        else if (operatingChoice_value === '3') {
          operat = firstnum * secondnum;
        }
        else if (operatingChoice_value === '4') {
          operat = firstnum / secondnum;
        }
        else if (operatingChoice_value === '5') {
          operat = firstnum % secondnum;
        }
        document.getElementById("demo3").innerHTML = operat;
      }, myCalculatTime * 1000);
    }

    function myFunction() {
      var rdo_operatingType = document.getElementsByName('operatingtyType');
      var rdo_operatingChoice = document.getElementsByName('operatingChoice');

      for (i = 0; i < rdo_operatingType.length; i++) {
        if (rdo_operatingType[i].checked) {
          var operatingType_value = rdo_operatingType[i].value;
          firstFunction(operatingType_value);
          secondFunction(operatingType_value);
        }
      }

      for (j = 0; j < rdo_operatingChoice.length; j++) {
        if (rdo_operatingChoice[j].checked) {
          var operatingChoice_value = rdo_operatingChoice[j].value
          SetTimeFunction(operatingChoice_value);
          return
        }
      }
    }

  </script>

</body>

</html>