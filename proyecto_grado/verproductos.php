<table>
  <thead>
    <tr>
      <th>Producto</th>
      <th>Precio</th>
      <th>Cantidad</th>
      <th>Subtotal</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($productos as $producto) { ?>
      <tr>
        <td><?php echo $producto['nombre']; ?></td>
        <td><?php echo $producto['precio']; ?></td>
        <td><?php echo $producto['cantidad']; ?></td>
        <td><?php echo $producto['subtotal']; ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>