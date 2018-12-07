<?php
    include "includes/head.php"
?>

<cms:template title='Info pages' />

<!-- Project overview -->
<div class="container-fluid px-0">
    <nav class="navbar navbar-expand-xs navbar-dark bg-transparent fixed-top col-6">
        <a class="navbar-brand" href="/thebulb/dist">THE<b>BULB.</b></a>
        <span class="navbar-text mr-auto">
            <!-- <a href="/thebulb/dist" class="text-muted"><span class="ti-video-camera"></span> Back to showreel</a> -->
        </span>
    </nav>

    <!-- add extra container element for Masonry -->
    <div class="grid">
        <!-- add sizing element for columnWidth -->
        <div class="grid-sizer col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 px-0"></div>

        <cms:repeatable name='my_projects' label='Projects'>
            <cms:editable
                type='image'
                name='project_image'
                label='Project image'
                show_preview='1' preview_width='150' input_width='200' col_width='300'
            />
            <cms:editable
                name='project_title'
                label='Title'
                desc='Enter the title of your project here'
                type='text'>
            </cms:editable>
            <cms:editable
                name='project_description'
                label='Project description'
                desc='Enter a SHORT description of your project here'
                type='textarea'>
            </cms:editable>
            <cms:editable
                name='project_client'
                label='Client'
                type='text'>
            </cms:editable>
            <cms:editable
                name='project_designer'
                label='Designer'
                type='text'>
            </cms:editable>
            <cms:editable
                name='project_link'
                label='Project link'
                type='text'>
            </cms:editable>
            <cms:editable
                name='project_photo_credits'
                label='Photo credits'
                type='textarea'>
            </cms:editable>
        </cms:repeatable>

        <cms:show_repeatable 'my_projects' >
        <!-- Content -->
        <div class="grid-item col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 px-0">
            <div class="grid-item-content card bg-black border-0">
                <img src="<cms:show project_image />" class="card-img" alt="">

                <div class="card-img-overlay text-white pt-5" style="display:none;">
                    <b class="card-title"><cms:show project_title /></b>
                    <p class="card-text"><cms:show project_description /></p>

                    <small class="card-text">
                        <b>Client:</b> <cms:show project_client />
                    </small><br>
                    <small class="card-text">
                        <b>Design:</b> <cms:show project_designer />
                    </small><br><br>
                    <a href="http://<cms:show project_link />" class=""><cms:show project_link /></a>
                    <p><cms:show project_photo_credits /></p>
                </div>
            </div>
        </div>
        </cms:show_repeatable>
    </div>
    <button type="button" class="btn btn-outline-white border-0 ml-auto m-2 position-absolute" style="right:0; top:0" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
        Back <i class="ti-back-left"></i>
    </button>
</div>

<nav class="nav collapse navbar-collapse fade show position-fixed w-100 h-100 menu align-items-center justify-content-around p-5" id="menu" style="max-height: 100vh">
    <a
        class="nav-link h4 text-white d-flex" href="#"
        data-trigger="focus"
        data-container="body"
        data-toggle="popover"
        data-placement="bottom"
        data-content='
        <cms:editable name="about" type="richtext"></cms:editable>'
        data-html="true">
        <span class="ti-light-bulb bulb-effect align-self-end mr-2"></span> about THE<b class="font-weight-bold">BULB.</b>
    </a>
    <a class="nav-link h4 text-white d-flex" href="#" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="ti-image gallery-effect align-self-end mr-2"></span> reference
    </a>
    <a
        class="nav-link h4 text-white d-flex" href="#"
        data-trigger="focus"
        data-container="body"
        data-toggle="popover"
        data-placement="bottom"
        data-content='
        <cms:editable name="contact" type="richtext"></cms:editable>'
        data-html="true">
        <span class="ti-email email-effect align-self-end mr-2"></span> contact
    </a>
    <a class="nav-link h4 text-white d-flex" href="#"
        data-trigger="focus"
        data-container="body"
        data-toggle="popover"
        data-placement="bottom"
        data-content='
        <cms:editable name="jobs" type="richtext"></cms:editable>'
        data-html="true">
        <span class="ti-hummer hammer-effect align-self-end mr-2"></span> jobs
    </a>
</nav>

<?php
    include "includes/footer.php"
?>