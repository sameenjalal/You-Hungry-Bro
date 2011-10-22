<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title><?php echo $this->eprint($this->title); ?></title>
		<link rel="stylesheet" type="text/css" href="no.css" />
	</head>

	<body id="food">
		<div id="wrapper">
			<div id="header">
			<h1><?= $this->eprint($this->title); ?></h1>
			</div><!-- header ends -->

			<div id="content">
				<pre><? //print_r($this->body); ?></pre>
				<? if (!is_null($this->body)): ?>
					<!-- A table of books -->
					<table>
						<tr>
							<th>Name</th>
							<th>Address</th>
							<th>Phone</th>
						</tr>

						<? foreach ($this->body as $key => $facilities): ?>
							<pre><? //print_r($facilities); ?></pre>
							<? foreach ($facilities as $val): ?>
								<pre><? //print_r($val); ?></pre>
								<tr>
									<td><?=$val->NAME;?></td>
									<td><?=$val->ADDRESS;?></td>
									<td><?=$val->PHONE;?></td>
								</tr>
							<? endforeach; ?>
						<? endforeach; ?>
					</table>
				<? else: ?>
					<p>Stay bored my friends.</p>
				<? endif; ?>
			</div><!--content ends -->

			<div id="footer">
				<p>Copyright <a href="http://sameenjalal.com">Sameen Jalal</a></p>
			</div><!-- footer ends -->
		</div><!-- wrapper ends -->
	</body>
</html>
