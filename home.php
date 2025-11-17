
<?php 
include 'header.php';
?>
 <div class="wrap">
    <h1>Foydalanuvchilar ro'yxati</h1>

    <div class="table-card" role="region" aria-label="Foydalanuvchilar jadvali">
      <div class="table-head">
        <div class="title">
          <div class="logo">FS</div>
          <div>
            <div style="font-weight:700">School — Student list</div>
            <div class="subtitle">Eng so'nggi ma'lumotlar yangiligi</div>
          </div>
        </div>
        <div>
          <button class="action-btn" aria-label="Export">Export</button>
        </div>
      </div>

      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>Ism</th>
              <th>familya</th>
              <th>yosh</th>
              <th>Bahosi</th>
              
              <th style="text-align:right">Amallar</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($talabalar as $key => $item): ?>
              <tr>
                <td><?php echo ++$key ?></td>
                <td><?= $item['ism'] ?></td>
                 <td><?= $item['familya'] ?></td>
                 <td><?php echo $item['yoshi']?></td>
                 <td><?php echo $item['bahosi']?></td>
              </tr> 
              <?php endforeach; ?>
            <tr>
              <td data-label="#">1</td>
              <td data-label="Ism">Ali Rustamov</td>
              <td data-label="Elektron pochta">ali.r@example.uz</td>
              <td data-label="Guruh">10-A</td>
              <td data-label="Bahosi">92%</td>
              <td data-label="Status"><span class="status ok">Faol</span></td>
              <td data-label="Amallar" style="text-align:right">
                <button class="action-btn">Ko'rish</button>
              </td>
            </tr>


            <!-- Qo'shimcha qatorlar shu tarzda -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <?php
  include 'footer.php';
  ?>