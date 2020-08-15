<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('head'); ?>
</head>

<body class="animsition">

    <!-- Header -->
    <?php $this->load->view('header'); ?>

    <!-- Sidebar -->
    <?php $this->load->view('sidebar'); ?>


    <!-- Cart -->
    <?php $this->load->view('cart'); ?>


    <!-- Slider -->



    <!-- Banner -->



    <!-- Blog -->
    <?php $this->load->view('blog_content'); ?>


    <!-- Footer -->
    <?php $this->load->view('footer'); ?>


    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>

    <!-- Modal1 -->
    <?php $this->load->view('detail'); ?>

    <?php $this->load->view('js'); ?>

</body>

</html>