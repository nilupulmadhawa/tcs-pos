<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Invoive</title>
  <style type="text/css">
    .clearfix:after {
      content: "";
      display: table;
      clear: both;
    }

    a {
      color: black;
      text-decoration: underline;
    }

    body {
      position: relative;
      width: 8cm;
      margin: 0 auto;
      margin-top: -10px;
      color: #001028;
      background: #FFFFFF;
      font-family: Arial, sans-serif;
      font-size: 13px;
      font-family: Arial;
    }

    header {
      padding: 10px 0;
      margin-bottom: 5px;
    }

    #logo {
      text-align: center;
    }

    #logo img {
      width: 4cm;
    }

    h1 {
      border-top: 1px solid black;
      border-bottom: 1px solid black;
      color: black;
      font-size: 2em;
      line-height: 1.4em;
      font-weight: normal;
      text-align: center;
      margin: 0 0 20px 0;
    }


    #project {
      float: left;
    }

    #project span {
      color: black;
      text-align: right;
      width: 70px;
      margin-right: 10px;
      display: inline-block;
      font-size: 12px;
    }

    #company {
      float: right;
      text-align: right;
    }

    #project div,
    #company div {
      white-space: nowrap;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
      margin-bottom: 20px;
    }

    table th,
    table td {
      text-align: center;
    }


    table th {
      padding: 5px 5px;
      color: black;
      border-bottom: 1px solid black;
      white-space: nowrap;
      font-weight: normal;
    }

    table .service,
    table .desc {
      text-align: left;
    }

    table td {
      padding: 2px;
      /* text-align: right; */
    }
    #col{
      text-align: right;
    }

    table td.service,
    table td.desc {
      vertical-align: top;
    }

    table td.unit,
    table td.qty,
    table td.total {
      font-size: 13px;
    }

    table td.grand {
      border-top: 1px solid black;
    }

    #notices .notice {
      text-align: center;
      color: black;
      font-size: 13px;
    }

    footer {
      color: black;
      width: 100%;
      position: absolute;
      bottom: 0;
      border-top: 1px solid #C1CED9;
      padding: 8px 0;
      text-align: center;
    }
  </style>
</head>

<body>
  <header class="clearfix">
    <div id="logo">
      <img src="{{ asset('dist/img/logo1.png') }}">
      {{-- <div class="notice" style="font-size: 12px;">Supply Of Heavy Machinary Cylinder Repair Kits, Oilseals,O-rings,
        Dust seal,Pressure seal, Floating seals & Every kind of NOK Seals.</div> --}}
    </div>
    <h1>INVOICE</h1>
    <div id="company" class="clearfix">
      <div>THUSHARA CELLULAR SERVICE</div>
      <div>No. 8/3, Kururnegala Road, Makandura</div>
      {{-- <div>Branches:</div> --}}
      <div>Tel :0777834254 / 07661122656</div>
      <div>E-mail :<a href="#">thusharacom4@gmail.com</a></div>
    </div>
    <div id="project">
      <div><span>INVOICE NO</span> #{{$expenses->id}}</div>
      <div><span>DATE</span>{{$expenses->created_at}}</div>
    </div>
  </header>
  <main>
    <table>
      <thead>
        <tr>
          <div class="mt-4">
            <div class="row text-600 text-white bgc-default-tp1 py-25">
              <th>
                <div class="d-none d-sm-block col-1">ID</div>
              </th>
              <th>
                <div class="col-9 col-sm-3">Acc Number</div>
              </th>
              <th>
                <div class="d-none d-sm-block col-4 col-sm-3">Ref Number</div>
              </th>
              <th>
                <div class="d-none d-sm-block col-4 col-sm-2">Description</div>
              </th>
            </div>
        </tr>
      </thead>
      <tbody>
         <tr>
           
          <div class="mt-4">
            <div class="row text-600 text-white bgc-default-tp1 py-25">
              <td>
                <div >{{$expenses->id}}</div>
              </td>
              <td>
                <div >{{$expenses->accnumber}}</div>
              </td>
              <td>
                <div >{{$expenses->refnumber}}</div>
              </td>
              <td>
                <div >{{$expenses->description}}</div>
              </td>
            </div>
        </tr>
        {{-- <tr>
            <th class="service">NO.</th>
            <th class="desc">ITEM</th>
            <th>PRICE<br>(Rs.)</th>
            <th>QTY</th>
            <th>TOTAL <br>(Rs.)</th>
          </tr> --}}
      
      
        {{-- echo $user_list; --}}
        <tr>
          <td colspan="3" class="grand total" id="col">Pay Amount</td>
          <td class="grand total" style="font-size: 13px; "><strong>{{$expenses->amount}}</strong></td>
        </tr>
      </tbody>
    </table>





    </div>


    <div id="notices">


      {{-- <div>NOTICE:</div> --}}
      <div class="notice">All Kinds of Phone models and accessories with company warranty & phone repairs</div>

      <div class="notice" style="font-size: 13px;"><strong>GOOD PURCHASED UNDER GOOD WORLING CONDITIONS <br> THANK YOU COME AGAIN!!</strong></div>


    </div>
  </main>
  <script>
    window.addEventListener("load", window.print());
    window.onafterprint = function(event) {
      history.back();
    };
  </script>
</body>

</html>