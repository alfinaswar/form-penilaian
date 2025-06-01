@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive active-projects">
                        <div class="tbl-caption">
                            <h4 class="heading mb-0">Active Projects</h4>
                        </div>
                        <table id="projects-tbl" class="table">
                            <thead>
                                <tr>
                                    <th>Project Name</th>
                                    <th>Project Lead</th>
                                    <th>Progress</th>
                                    <th>Assignee</th>
                                    <th>Status</th>
                                    <th>Due Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Batman</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle"
                                                alt="">
                                            <p class="mb-0 ms-2">Liam Risher</p>
                                        </div>
                                    </td>
                                    <td class="pe-0">
                                        <div class="tbl-progress-box">
                                            <div class="progress">
                                                <div class="progress-bar bg-primary"
                                                    style="width:53%; height:5px; border-radius:4px;" role="progressbar">
                                                </div>
                                            </div>
                                            <span class="text-primary">53%</span>
                                        </div>
                                    </td>
                                    <td class="pe-0">
                                        <div class="avatar-list avatar-list-stacked">
                                            <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle"
                                                alt="">
                                            <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle"
                                                alt="">
                                            <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle"
                                                alt="">
                                        </div>
                                    </td>
                                    <td class="pe-0">
                                        <span class="badge badge-primary light border-0">Inprogress</span>
                                    </td>
                                    <td>
                                        <span>06 Sep 2021</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bender Project</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="images/contacts/pic2.jpg" class="avatar avatar-md rounded-circle"
                                                alt="">
                                            <p class="mb-0 ms-2">Oliver Noah</p>
                                        </div>
                                    </td>
                                    <td class="pe-0">
                                        <div class="tbl-progress-box">
                                            <div class="progress">
                                                <div class="progress-bar bg-danger"
                                                    style="width:30%; height:5px; border-radius:4px;" role="progressbar">
                                                </div>
                                            </div>
                                            <span class="text-danger">30%</span>
                                        </div>
                                    </td>
                                    <td class="pe-0">
                                        <div class="avatar-list avatar-list-stacked">
                                            <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle"
                                                alt="">
                                            <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle"
                                                alt="">
                                            <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle"
                                                alt="">
                                        </div>
                                    </td>
                                    <td class="pe-0">
                                        <span class="badge badge-danger light border-0">Pending</span>
                                    </td>
                                    <td>
                                        <span>06 Sep 2021</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Canary</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="images/contacts/pic888.jpg" class="avatar avatar-md rounded-circle"
                                                alt="">
                                            <p class="mb-0 ms-2">Elijah James</p>
                                        </div>
                                    </td>
                                    <td class="pe-0">
                                        <div class="tbl-progress-box">
                                            <div class="progress">
                                                <div class="progress-bar bg-success"
                                                    style="width:40%; height:5px; border-radius:4px;" role="progressbar">
                                                </div>
                                            </div>
                                            <span class="text-success">40%</span>
                                        </div>
                                    </td>
                                    <td class="pe-0">
                                        <div class="avatar-list avatar-list-stacked">
                                            <img src="images/contacts/pic666.jpg" class="avatar avatar-md  rounded-circle"
                                                alt="">
                                            <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle"
                                                alt="">
                                            <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle"
                                                alt="">
                                            <img src="images/contacts/pic666.jpg" class="avatar avatar-md  rounded-circle"
                                                alt="">
                                        </div>
                                    </td>
                                    <td class="pe-0">
                                        <span class="badge badge-success light border-0">Completed</span>
                                    </td>
                                    <td>
                                        <span>06 Sep 2021</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Casanova</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle"
                                                alt="">
                                            <p class="mb-0 ms-2">William Risher</p>
                                        </div>
                                    </td>
                                    <td class="pe-0">
                                        <div class="tbl-progress-box">
                                            <div class="progress">
                                                <div class="progress-bar bg-primary"
                                                    style="width:53%; height:5px; border-radius:4px;" role="progressbar">
                                                </div>
                                            </div>
                                            <span class="text-primary">53%</span>
                                        </div>
                                    </td>
                                    <td class="pe-0">
                                        <div class="avatar-list avatar-list-stacked">
                                            <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle"
                                                alt="">
                                            <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle"
                                                alt="">
                                            <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle"
                                                alt="">
                                        </div>
                                    </td>
                                    <td class="pe-0">
                                        <span class="badge badge-primary light border-0">Inprogress</span>
                                    </td>
                                    <td>
                                        <span>06 Sep 2021</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endsection
