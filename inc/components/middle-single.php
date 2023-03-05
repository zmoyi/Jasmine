<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<div class="col-lg-8 col-md-12">
    <div id="middle">
        <?php $this->need('inc/components/middle-header.php'); ?>
        <div id="article" class="mb-5">
            <div class="row">
                <div class="col-12">
                    <div class="item d-flex flex-column">
                        <div class="head mb-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="left-head">
                                    <div class="title mb-4">
                                        <h1 class="fs-3"><?php $this->title() ?></h1>
                                    </div>
                                    <div class="meta d-flex justify-content-between mb-3">
                                        <div class="left">
                                            <?php if($this->is('post')): ?>
                                            <span>
                                                <?php $this->category('<span class="middotDivider"></span>', true, '无'); ?>
                                            </span>
                                            <span class="middotDivider"></span>
                                            <?php endif; ?>
                                            <span><?php echo humanizedDate($this->created); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($thumbnail = getThumbnail($this->cid, '')): ?>
                                    <div class="thumbnail d-none d-lg-block">
                                        <a href="" title="<?php $this->title() ?>">
                                            <img width="170" height="130" src="<?php echo $thumbnail; ?>" alt="<?php $this->title() ?>">
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div id="content" class="mb-3">
                            <?php $this->content(); ?>
                        </div>
                        <div class="socialize m-auto mb-3">
                            <button type="button" class="btn btn-light"><i
                                    class="bi bi-hand-thumbs-up-fill"></i>&nbsp;(0)
                            </button>
                        </div>
                        <?php if($this->is('post')): ?>
                        <div class="post-tags mb-3">
                            <i class="bi bi-tags-fill"></i> <?php $this->tags(', ', true, 'none'); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->need('comments.php'); ?>
    </div>
</div>