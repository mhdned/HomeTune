@extends(admin.layouts.app)

@section(head-tag)
    <title>ادمین | نظرات</title>
@endsection

@section('content')

<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">نظرات</h4>
                            <span><a href="#" class="btn btn-success disabled">ایجاد</a></span>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <div class="">
                                    <table class="table zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>کاربر</th>
                                            <th>نظر</th>
                                            <th>وضعیت</th>
                                            <th>تنظیمات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($comments as $comment){
                                            ?>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">
                                                        <?= $comment->id ?>
                                                    </td>
                                                    <td>
                                                        <?= $comment->user()->first_name . " " . $comment->user()->last_name ?>
                                                    </td>
                                                    <td>
                                                        <?= $comment->comment ?>
                                                    </td>
                                                    <td><span class="
                                                        <?= ($comment->approved == 1) ? 'text-success' : 'text-danger' ?> 
                                                        ">
                                                        <?= ($comment->approved == 1) ? 'تایید شده' : 'تایید نشده' ?>    
                                                    </span></td>
                                                    <td>
                                                        <a href="<?= route('admin.comment.show',[$comment->id]) ?>" class="btn btn-success waves-effect waves-light">نمایش</a>
                                                        <form class="d-inline" action="<?= route('admin.comment.approved',[$comment->id]) ?>" method="post">
                                                            <input type="hidden" name="_method" value="put">
                                                            <button type="submit"
                                                                class="btn waves-effect waves-light
                                                                <?= ($comment->approved == 1) ? 'btn-danger' : 'btn-warning' ?>
                                                                ">
                                                                <?= ($comment->approved == 1) ? 'لغو تایید' : 'تایید' ?> 
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
</div>

@endsection