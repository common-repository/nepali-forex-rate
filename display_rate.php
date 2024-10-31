<link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) ;?>assets/forex_css.css" />
<table cellspacing="5" cellpadding="5">
  <tr>
    <td colspan="2"><h5 align="center">Nepali Exchange Rate  <br />as of <?php echo date('Y/m/d') ;?> </h5></td>
  </tr>
  <tr>
    <td width="118">U.S. dollar</td>
    <td width="47"><?php echo convertCurrency('USD');?></td>
  </tr>
  <tr>
    <td>European euro </td>
    <td><?php echo convertCurrency('EUR');?></td>
  </tr>
  <tr>
    <td>UK pound sterling</td>
    <td><?php echo convertCurrency('GBP');?></td>
  </tr>
  <tr>
    <td>Swiss franc:</td>
    <td><?php echo convertCurrency('CHF');?></td>
  </tr>
  <tr>
    <td>Australian dollar</td>
    <td><?php echo convertCurrency('AUD');?></td>
  </tr>
 
</table>
