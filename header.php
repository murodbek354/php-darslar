<?php
$talabalar = [
["ism"=> "Murodbek", "familya" => "Jumanazarov","yoshi"=>14, "bahosi" =>5],
["ism"=> "SHohjahon", "familya" => "Rozmamatov","yoshi"=>15, "bahosi" =>4],
["ism"=> "Asilbek", "familya" => "Ibadullayyev","yoshi"=>17, "bahosi" =>5],
["ism"=> "Boburbek", "familya" => "Baxodirov","yoshi"=>16, "bahosi" =>4],
["ism"=> "Baxtbek", "familya" => "Umarov","yoshi"=>13, "bahosi" =>5],
["ism"=> "Safarbayev", "familya" => "Gulambay","yoshi"=>14, "bahosi" =>4],
]
?>
<!doctype html>
<html lang="uz">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Chiroyli jadval — Example</title>
<style>
  :root{
    --bg: #f6f8fb;
    --card: #ffffff;
    --accent1: #5b8cff;
    --accent2: #8bd3ff;
    --muted: #6b7280;
    --cell-padding: 14px 16px;
    --radius: 12px;
  }

  body{
    font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    background: linear-gradient(180deg, var(--bg), #eef4ff 60%);
    padding: 40px;
    color: #0f172a;
    -webkit-font-smoothing:antialiased;
  }

  .wrap{
    max-width: 980px;
    margin: 0 auto;
  }

  h1{
    font-size: 20px;
    margin: 0 0 18px 0;
    color: #0b1220;
  }

  .table-card{
    background: var(--card);
    border-radius: var(--radius);
    box-shadow: 0 6px 18px rgba(16,24,40,0.06);
    overflow: hidden;
    border: 1px solid rgba(16,24,40,0.04);
  }

  .table-head{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 18px;
    gap: 12px;
    background: linear-gradient(90deg, rgba(91,140,255,0.12), rgba(139,211,255,0.06));
  }
  .table-head .title{
    display:flex;
    gap:12px;
    align-items:center;
  }
  .logo{
    width:36px;
    height:36px;
    border-radius:8px;
    background: linear-gradient(135deg,var(--accent1),var(--accent2));
    box-shadow: 0 4px 10px rgba(91,140,255,0.18), inset 0 -6px 14px rgba(255,255,255,0.06);
    display:flex;
    align-items:center;
    justify-content:center;
    color:white;
    font-weight:700;
    font-size:15px;
  }
  .subtitle{
    color: var(--muted);
    font-size:13px;
  }

  .table-container{
    width:100%;
    overflow:auto;
  }

  table {
    width:100%;
    border-collapse: collapse;
    min-width:720px; /* for desktop, allows horizontal scroll on small screens */
  }

  thead th{
    text-align:left;
    font-size:13px;
    padding: var(--cell-padding);
    position: sticky;
    top:0;
    background: linear-gradient(180deg,#ffffff, #fafcff);
    backdrop-filter: blur(6px);
    border-bottom: 1px solid rgba(15,23,42,0.06);
    color:#0b1220;
    font-weight:600;
    letter-spacing: 0.2px;
  }

  tbody tr{
    transition: transform .15s ease, background .12s ease, box-shadow .12s ease;
  }

  tbody tr:hover{
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(12,20,40,0.06);
  }

  td{
    padding: var(--cell-padding);
    font-size:14px;
    border-bottom: 1px dashed rgba(15,23,42,0.03);
    vertical-align: middle;
  }

  tbody tr:nth-child(even){
    background: linear-gradient(90deg, rgba(246,248,251,0.6), rgba(255,255,255,0));
  }

  .status{
    display:inline-block;
    padding:6px 10px;
    border-radius:999px;
    font-size:13px;
    font-weight:600;
  }
  .status.ok{ background: rgba(72,187,120,0.12); color:#22884b; }
  .status.warn{ background: rgba(255,194,81,0.12); color:#9a6b00; }
  .status.bad{ background: rgba(255,112,112,0.10); color:#b02a2a; }

  .action-btn{
    padding:8px 12px;
    background: none;
    border: 1px solid rgba(11,17,32,0.06);
    border-radius:10px;
    cursor:pointer;
    font-size:13px;
  }
  .action-btn:focus{ outline: 3px solid rgba(91,140,255,0.16); }

  /* Responsive: convert rows into cards on small screens */
  @media (max-width:720px){
    .table-container{ padding:12px; }
    table{ min-width:100%; display:block; }
    thead{ display:none; }

    tbody tr{
      display:block;
      margin-bottom:12px;
      border-radius:12px;
      background: linear-gradient(180deg, #fff, #fbfdff);
      box-shadow: 0 6px 20px rgba(16,24,40,0.04);
      border: 1px solid rgba(16,24,40,0.03);
    }
    tbody tr:hover{ transform:none; box-shadow: 0 8px 30px rgba(16,24,40,0.06); }

    td{
      display:flex;
      justify-content:space-between;
      align-items:center;
      padding:12px;
      border-bottom:none;
    }
    td::before{
      content: attr(data-label);
      font-size:12px;
      color:var(--muted);
      margin-right:8px;
      font-weight:600;
      width:40%;
      white-space:nowrap;
    }
    td:last-child{ border-top:1px dashed rgba(15,23,42,0.04); padding-top:10px; }
  }
</style>
</head>
<body>