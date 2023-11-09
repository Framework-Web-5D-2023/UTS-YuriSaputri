<div class="container">
    <h1><?= $title ?></h1>
    <p>Hello, <?= $nama ?></p>
    <table class="table caption-top">
    <caption>Table Bookstore</caption>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Id</th>
        <th scope="col">Judul</th>
        <th scope="col">Harga</th>
        <th scope="col">Kategori</th>
        
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      <?php foreach ($bookstore as $b) : ?>
        <tr>
          <th scope="row"><?= $no++; ?></th>
          <td><?= $b["id"]; ?></td>
          <td><?= $b["judul"]; ?></td>
          <td><?= $b["harga"]; ?></td>
          <td><?= $b["kategori"]; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>