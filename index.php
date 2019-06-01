<?php
 $con = mysqli_connect('localhost','root','','sinema');
?>

<!DOCTYPE HTML>
<head>
<meta charset=utf-8">
<title>SİNEMA SALONU KARAR DESTEK SİSTEMİ</title>
<link href="stil.css" rel="stylesheet" type="text/css" />

  <div id="sayfa">
  <div id="renkicin">
    <div class="ustmenu">
      <ul>
        <li><a href='ANASAYFA.html'>ANASAYFA</a> </li>
        <li><a href='HOBİLERİM.html'>GRAFİKLER</a> </li>
        <li><a href='SOSYAL.html'>VERİ TABLOSU</a></li>
      </ul>
      </div>
  </div>
</head>

<body>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Film Adı', 'toplam'],
          <?php 
			$query = "SELECT ad,toplam from `filmler` order by toplam desc limit 20";
 
			 $exec = mysqli_query($con,$query);
			 while($row = mysqli_fetch_array($exec)){
 
			 echo "['".$row['ad']."',".$row['toplam']."],";
			 }
			 ?> 
 
 ]);

        var options = {
          chart: {
            title: 'KARAR GRAFİĞİ',
            subtitle: 'FİLM İSİMLERİ ve TOPLAM PUAN',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

 <div class="container-fluid">
 <div id="barchart_material" style="width: 90%; height: 500px;"></div>
 </div>
  
  
  
</body>



</head>
<body>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
         
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">VERİ TABLOSU</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>FİLM ADI</th>
                      <th>TÜR</th>
                      <th>TOPLAM SEYİRCİ</th>
                      <th>İMDB PUANI</th>
                      <th>FİLM TARİHİ</th>
                      <th>VİZYON SÜRESİ</th>
					  <th>TOPLAM PUAN</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>FİLM ADI</th>
                      <th>TÜR</th>
                      <th>TOPLAM SEYİRCİ</th>
                      <th>İMDB PUANI</th>
                      <th>FİLM TARİHİ</th>
                      <th>VİZYON SÜRESİ</th>
					  <th>TOPLAM PUAN</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
					
					<tr>
                      <td>İNCEPTİON</td>
                      <td>AKSİYON</td>
                      <td>9.854.756</td>
                      <td>8.8</td>
                      <td>2010</td>
                      <td>98</td>
					  <td>1.000.002</td>
                    </tr>
                      
                    <tr>
					
                      <td>ESARETİN BEDELİ</td>
                      <td>DRAM</td>
                      <td>7.633.544</td>
                      <td>9.3</td>
                      <td>1994</td>
                      <td>200</td>
					  <td>616</td>
                    </tr>
					
					<tr>
                      <td>AVENGERS-ENDGAME</td>
                      <td>AKSİYON</td>
                      <td>6.854.657</td>
                      <td>8.8</td>
                      <td>2019</td>
                      <td>24</td>
					  <td>617</td>
                    </tr>
					
					<tr>
                      <td>FORREST-GUMP</td>
                      <td>DRAM</td>
                      <td>7.254.312</td>
                      <td>8.8</td>
                      <td>1994</td>
                      <td>41</td>
					  <td>682</td>
                    </tr>
					
					<tr>
                      <td>MATRİX</td>
                      <td>AKSİYON</td>
                      <td>8.034.247</td>
                      <td>8.7</td>
                      <td>1999</td>
                      <td>48</td>
					  <td>1.000.001</td>
                    </tr>
					
					
					<tr>
                      <td>FİGHT-CLUB</td>
                      <td>DRAM</td>
                      <td>6.458.745</td>
                      <td>8.8</td>
                      <td>1999</td>
                      <td>78</td>
					  <td>941</td>
                    </tr>
					
					
					
					<tr>
                      <td>CİNDERELLA-MAN</td>
                      <td>DRAM</td>
                      <td>5.444.874</td>
                      <td>8.0</td>
                      <td>2005</td>
                      <td>38</td>
					  <td>874</td>
                    </tr>
					
					
					
					
				<tr>
                      <td>THE GREEN MİLE</td>
                      <td>DRAM</td>
                      <td>8.203.451</td>
                      <td>8.6</td>
                      <td>1999</td>
                      <td>61</td>
					  <td>814</td>
                    </tr>
					
					
					
					<tr>
                      <td>THE PRESTİGE</td>
                      <td>DRAM</td>
                      <td>5.412.784</td>
                      <td>8.5</td>
                      <td>2006</td>
                      <td>37</td>
					  <td>647</td>
                    </tr>
					
					
					
					<tr>
                      <td>LEON</td>
                      <td>DRAM</td>
                      <td>7.023.421</td>
                      <td>8.6</td>
                      <td>1994</td>
                      <td>64</td>
					  <td>825</td>
                    </tr>
					
					
					
					<tr>
                      <td>CAN DOSTUM</td>
                      <td>DRAM</td>
                      <td>5.025.048</td>
                      <td>8.5</td>
                      <td>2011</td>
                      <td>37</td>
					  <td>846</td>
                    </tr>
					
					
					
					
					<tr>
                      <td>PİANİST</td>
                      <td>DRAM</td>
                      <td>8.005.874</td>
                      <td>8.5</td>
                      <td>2002</td>
                      <td>91</td>
					  <td>978</td>
                    </tr>
					
					
					
					
					<tr>
                      <td>LOVE ME İF YOU DARE</td>
                      <td>AŞK</td>
                      <td>5.024.415</td>
                      <td>7.7</td>
                      <td>2003</td>
                      <td>14</td>
					  <td>714</td>
                    </tr>
					
					
					
					
					<tr>
                      <td>DETACHMENT</td>
                      <td>DRAM</td>
                      <td>4.124.748</td>
                      <td>7.7</td>
                      <td>2011</td>
                      <td>47</td>
					  <td>604</td>
                    </tr>
					
					
					
					
					
					<tr>
                      <td>FREQUENCY</td>
                      <td>GERİLİM</td>
                      <td>5.417.358</td>
                      <td>7.4</td>
                      <td>2000</td>
                      <td>27</td>
					  <td>601</td>
                    </tr>
					
					
					 <tr>
                      <td>BABY DRİVER</td>
                      <td>DRAM</td>
                      <td>4.024.784</td>
                      <td>7.3</td>
                      <td>2017</td>
                      <td>35</td>
					  <td>570</td>
                    </tr>
					
					 <tr>
                      <td>ATONEMENT </td>
                      <td>DRAM</td>
                      <td>4.124.658</td>
                      <td>7.8</td>
                      <td>2007</td>
                      <td>36</td>
					  <td>556</td>
                    </tr>
					
					
					 <tr>
                      <td>GROUNDHOG DAY</td>
                      <td>DRAM</td>
                      <td>4.024.185</td>
                      <td>8.0</td>
                      <td>1993</td>
                      <td>34</td>
					  <td>554</td>
                    </tr>
					
					
                    <tr>
                      <td>ORGANİZE İŞLER SAZAN SARMALI</td>
                      <td>AKSİYON</td>
                      <td>3.537.429</td>
                      <td>6.0</td>
                      <td>2019</td>
                      <td>10</td>
					  <td>20</td>
                    </tr>
                    <tr>
                      <td>HIZLI VE ÖFKELİ 7</td>
                      <td>AKSİYON</td>
                      <td>2.961.089</td>
                      <td>7.2</td>
                      <td>2015</td>
                      <td>14</td>
					  <td>24</td>
                    </tr>
                    <tr>
                      <td>HIZLI VE ÖFKELİ 8</td>
                      <td>AKSİYON</td>
                      <td>2.656.286</td>
                      <td>6.7</td>
                      <td>2017</td>
                      <td>16</td>
					  <td>25</td>
                    </tr>
                    <tr>
                      <td>TİTANİK</td>
                      <td>AŞK</td>
                      <td>2.943.123</td>
                      <td>7.8</td>
                      <td>1997</td>
                      <td>190</td>
					  <td>201</td>
                    </tr>
                    <tr>
                      <td>EVİM SENSİN</td>
                      <td>AŞK</td>
                      <td>2.703.241</td>
                      <td>5.0</td>
                      <td>2012</td>
                      <td>38</td>
					  <td>46</td>
                    </tr>
                    <tr>
                      <td>AŞK TESADÜFLERİ SEVER</td>
                      <td>AŞK</td>
                      <td>2.418.090</td>
                      <td>7.3</td>
                      <td>2011</td>
                      <td>35</td>
					  <td>45</td>
                    </tr>
                    <tr>
                      <td>UNUTURSAM FISILDA</td>
                      <td>AŞK</td>
                      <td>1.720.895</td>
                      <td>7.5</td>
                      <td>2014</td>
                      <td>29</td>
					  <td>38</td>
                    </tr>
                    <tr>
                      <td>ARİF V 216</td>
                      <td>BİLİM-KURGU</td>
                      <td>4.968.462</td>
                      <td>7.4</td>
                      <td>2018</td>
                      <td>20</td>
					  <td>32</td>
                    </tr>
                    <tr>
                      <td>G.O.R.A</td>
                      <td>BİLİM-KURGU</td>
                      <td>4.001.711</td>
                      <td>8.0</td>
                      <td>2014</td>
                      <td>36</td>
					  <td>48</td>
                    </tr>
                    <tr>
                      <td>A.R.O.G</td>
                      <td>BİLİM-KURGU</td>
                      <td>3.707.086</td>
                      <td>7.3</td>
                      <td>2008</td>
                      <td>22</td>
					  <td>33</td>
                    </tr>
                    <tr>
                      <td>AVATAR</td>
                      <td>BİLİM-KURGU</td>
                      <td>2.482.991</td>
                      <td>7.8</td>
                      <td>2009</td>
                      <td>49</td>
					  <td>59</td>
                    </tr>
                    <tr>
                      <td>İNANILMAZ AİLE 2</td>
                      <td>ÇİZGİ FİLM</td>
                      <td>1.267.415</td>
                      <td>7.7</td>
                      <td>2018</td>
                      <td>15</td>
					  <td>24</td>
                    </tr>
                    
               
                    <tr>
                      <td>MÜSLÜM</td>
                      <td>DRAM</td>
                      <td>6.474.272</td>
                      <td>8.2</td>
                      <td>2018</td>
                      <td>24</td>
					  <td>34</td>
                    </tr>
                    
            
                    <tr>
                      <td>CEHENNEM</td>
                      <td>GERİLİM</td>
                      <td>600.992</td>
                      <td>3.1</td>
                      <td>2016</td>
                      <td>8</td>
					  <td>612</td>
                    </tr>
                    <tr>
                      <td>RECEP İVEDİK 5</td>
                      <td>KOMEDİ</td>
                      <td>7.437.050</td>
                      <td>3.5</td>
                      <td>2017</td>
                      <td>25</td>
					  <td>36</td>
                    </tr>
                    
                    <tr>
                      <td>DÜĞÜN DERNEK</td>
                      <td>KOMEDİ</td>
                      <td>6.980.070</td>
                      <td>7.2</td>
                      <td>2013</td>
                      <td>40</td>
					  <td>54</td>
                    </tr>
                    <tr>
                      <td>DÜĞÜN DERNEK SÜNNET</td>
                      <td>KOMEDİ</td>
                      <td>6.073.364</td>
                      <td>6.5</td>
                      <td>2015</td>
                      <td>21</td>
					  <td>34</td>
                    </tr>
                    <tr>
                      <td>DABBE</td>
                      <td>KORKU</td>
                      <td>539.381</td>
                      <td>7.0</td>
                      <td>2006</td>
                      <td>29</td>
					  <td>575</td>
                    </tr>
                    <tr>
                      <td>SİCCİN</td>
                      <td>KORKU</td>
                      <td>337.126</td>
                      <td>6.3</td>
                      <td>2014</td>
                      <td>15</td>
					  <td>358</td>
                    </tr>
                    <tr>
                      <td>DABBE 6</td>
                      <td>KORKU</td>
                      <td>536.631</td>
                      <td>6.0</td>
                      <td>2015</td>
                      <td>9</td>
					  <td>552</td>
                    </tr>
                    <tr>
                      <td>SİCCİN 4</td>
                      <td>KORKU</td>
                      <td>476.880</td>
                      <td>6.4</td>
                      <td>2014</td>
                      <td>8</td>
					  <td>491</td>
                    </tr>
                    <tr>
                      <td>AV MEVSİMİ</td>
                      <td>MACERA</td>
                      <td>2.216.455</td>
                      <td>7.5</td>
                      <td>2010</td>
                      <td>32</td>
					  <td>42</td>
                    </tr>
                    <tr>
                      <td>HARRY POTTER VE FELSEFE TAŞI</td>
                      <td>MACERA</td>
                      <td>1.173.255</td>
                      <td>9.3</td>
                      <td>2002</td>
                      <td>30</td>
					  <td>40</td>
                    </tr>
                    <tr>
                      <td>KAPTAN AMERİKA:KAHRAMANLARIN SAVAŞI</td>
                      <td>MACERA</td>
                      <td>1.165.894</td>
                      <td>9.6</td>
                      <td>2016</td>
                      <td>8</td>
					  <td>19</td>
                    </tr>
                    <tr>
                      <td>AVENGERS:SONSUZLUK SAVAŞI</td>
                      <td>MACERA</td>
                      <td>1.909.967</td>
                      <td>8.5</td>
                      <td>2018</td>
                      <td>14</td>
					  <td>24</td>
                    </tr>
                    <tr>
                      <td>CELAL İLE CEREN</td>
                      <td>ROMANTİK KOMEDİ</td>
                      <td>2.853.711</td>
                      <td>4.6</td>
                      <td>2013</td>
                      <td>23</td>
					  <td>30</td>
                    </tr>
                    <tr>
                      <td>KOCAN KADAR KONUŞ</td>
                      <td>ROMANTİK KOMEDİ</td>
                      <td>1.930.524</td>
                      <td>6.6</td>
                      <td>2015</td>
                      <td>15</td>
					  <td>24</td>
                    </tr>
                    <tr>
                      <td>BANA MASAL ANLATMA</td>
                      <td>ROMANTİK KOMEDİ</td>
                      <td>1.576.979</td>
                      <td>7.6</td>
                      <td>2015</td>
                      <td>10</td>
					  <td>19</td>
                    </tr>
                    <tr>
                      <td>HADİ İNŞALLAH</td>
                      <td>ROMANTİK KOMEDİ</td>
                      <td>1.255.390</td>
                      <td>5.6</td>
                      <td>2014</td>
                      <td>16</td>
					  <td>23</td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
		
		
      
 
  </section>

 
</body>


</html>
