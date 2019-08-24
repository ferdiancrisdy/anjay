<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Website Gue</title>
	<link href="<?php echo base_url('style/assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<script src="<?php echo base_url('style/assets/js/bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url('style/assets/jquery/jquery-1.11.1.min.js');?>"></script>
	<link href="<?php echo base_url('style/welcome.css');?>" rel="stylesheet">
</head>

<body>
	<!------ Include the above in your HEAD tag ---------->

	<div class="site-wrapper">

		<div class="site-wrapper-inner">

			<div class="cover-container">

			<div class="masthead clearfix">
				<div class="inner">
				<h3 class="masthead-brand">Website Peminjaman</h3>
				<nav class="nav nav-masthead">
					<!-- <a class="nav-link active" href="#">Home</a> -->
					<!-- <a class="nav-link" href="#">Features</a> -->
					<a class="nav-link" href="<?= base_url('index.php/contact') ?>">Contact</a>
				</nav>
				</div>
			</div>

			<div class="inner cover">
				<h1 class="cover-heading">Tekan Login</h1>
				<p class="lead">Untuk Menuju Halaman Login</p>
				<p class="lead">
				<a href="<?php echo base_url('index.php/login');?>" class="btn btn-lg btn-secondary">Login</a>
				</p>
			</div>

			<div class="mastfoot">
				<div class="inner">
				<!-- <p>Cover template for <a href="https://getbootstrap.com">Bootstrap</a>.</p> -->
				</div>
			</div>

			</div>

		</div>

		</div>
	</body>