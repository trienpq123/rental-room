<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FurnitureController;
use App\Http\Controllers\imgPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailAlertCheckOutController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\EmailBillController;
use App\Http\Controllers\Auth\EmailBookRoomController;
use App\Http\Controllers\Auth\EmailCheckOutController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\comment_QAController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\img_QAController;
use App\Http\Controllers\notyNotyQaController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\QAController;
use App\Http\Controllers\RoomNumberController;
use App\Http\Controllers\search_trendsController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\StatisticalSController;
use App\Http\Controllers\UploadCkeditController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PayOnlineController;
use App\Http\Controllers\ReactionController;
use App\Http\Controllers\SavingRoomController as ControllersSavingRoomController;
use Laravel\Socialite\Two\FacebookProvider;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::get('config', [ConfigController::class, 'get_Config']);
// Route::post('config/', [ConfigController::class, 'create_Config']);
// TEST CK

// Cấu hình 
Route::post('uploads/', [UploadCkeditController::class, 'upload_CK']);
Route::put('config/update/logo/{id}', [ConfigController::class, 'Logo']);
Route::get('config', [ConfigController::class, 'get_Config']);
Route::put('config/update', [ConfigController::class, 'update_Config']);
Route::get('config/{id}', [ConfigController::class, 'get_Config'])->name('getConfig');
Route::post('config/', [ConfigController::class, 'create_Config'])->name('createConfig');
Route::put('config/update/{id}', [ConfigController::class, 'update_Config'])->name('getConfig');
Route::get('banner/show', [BannerController::class, 'get_Banner']);
Route::get('banner/show/{id}', [BannerController::class, 'get_Banner_id']);
Route::put('banner/update/{id}', [BannerController::class, 'update_Banner']);
Route::get('about/show', [ConfigController::class, 'get_About']);

// Category
Route::get('category/show', [CategoryController::class, 'show']);
Route::get('category/show/{id}', [CategoryController::class, 'show_id']);
Route::post('category/create', [CategoryController::class, 'created_at']);
Route::put('category/update/{id}', [CategoryController::class, 'update']);
Route::delete('category/delete/{id}', [CategoryController::class, 'delete']);

// Blog
Route::get('blog/show', [BlogController::class, 'show']);
Route::get('blog/show/{id}', [BlogController::class, 'show_id']);
Route::get('blog/showUser/{id}', [BlogController::class, 'show_user']);
Route::post('blog/create', [BlogController::class, 'created_at']);
Route::put('blog/update/{id}', [BlogController::class, 'update']);
Route::put('blog/updateView/{id}', [BlogController::class, 'updateView']);
Route::delete('blog/delete/{id}', [BlogController::class, 'delete']);

// Post
Route::get('post/show', [PostController::class, 'show']);
Route::get('post/show_tv', [PostController::class, 'show_tv']);
Route::get('post/showHeart', [PostController::class, 'showHeart']);
Route::get('post/show/{id}', [PostController::class, 'show_id']);
Route::get('post/showUser/{id}', [PostController::class, 'showUser']);
Route::get('post/showPost/{id}', [PostController::class, 'showPost']);
Route::post('post/create', [PostController::class, 'created_at']);
Route::put('post/update/{id}', [PostController::class, 'update']);
Route::delete('post/delete/{id}', [PostController::class, 'delete']);
Route::get('post/delete', [PostController::class, 'show_delete']);
Route::get('post/status', [PostController::class, 'show_status']);
Route::put('post/updateView/{id}', [PostController::class, 'updateView']);
Route::get('post/furniture/{id_post}', [PostController::class, 'show_furniture_post']);
Route::get('post/show_province_detail/{id_post}', [PostController::class, 'show_province_detail']);
Route::get('post/show_district_detail/{id_post}', [PostController::class, 'show_district_detail']);
Route::get('post/show_ward_detail/{id_post}', [PostController::class, 'show_ward_detail']);
Route::get('post/show_roomtype/{id_post}', [PostController::class, 'show_room_type']);
Route::delete('post/image/delete/{id_img}', [PostController::class, 'Post_DeleteImage']);
Route::get('post/post_view_top5', [PostController::class, 'Post_view_top5']);
Route::get('post/show_count_roomNumber/{id_post}', [PostController::class, 'Post_count_roomNumber']);

// RoomNumber
Route::get('roomNumber/show', [RoomNumberController::class, 'show']);
Route::get('roomNumber/show_one/{id}', [RoomNumberController::class, 'show_one']);
Route::get('roomNumber/show_id_user_two/{id}', [RoomNumberController::class, 'show_id_user_two']);
Route::get('roomNumber/booking_room/{id}', [RoomNumberController::class, 'bookingRoom']);
Route::get('roomNumber/get-booking-room/{id}', [RoomNumberController::class, 'getBookingRoom']);
Route::get('roomNumber/show_post/{id}', [RoomNumberController::class, 'show_postID']);
Route::get('roomNumber/show/{id}', [RoomNumberController::class, 'show_id']);
Route::put('roomNumber/update/{id}', [RoomNumberController::class, 'update']);
Route::put('roomNumber/update_user/{id}', [RoomNumberController::class, 'update_user']);
Route::get('roomNumber/checkout/{id}', [RoomNumberController::class, 'checkOutRoom']);
Route::put('roomNumber/update_checkRoom/{id}', [RoomNumberController::class, 'update_checkRoom']);
Route::get('roomNumber/detail_checkRoom/{id}', [RoomNumberController::class, 'detail_checkRoom']);
Route::get('roomNumber/show_roombookuser/{id}', [RoomNumberController::class, 'showRoomBookUser']);
Route::post('roomNumber/cancel_roombookuser/{id}', [RoomNumberController::class, 'cancelRoomBookUser']);
Route::get('roomNumber/show_sendnoti/{id}', [RoomNumberController::class, 'showSendNoti']);
Route::get('roomNumber/cancelSendNoti/{id}', [RoomNumberController::class, 'cancelSendNoti']);
Route::post('roomNumber/deleteSendNoti/{id}', [RoomNumberController::class, 'deleteSendNoti']);
Route::get('roomNumber/updateRoomNumber/{id_roomNumber}', [RoomNumberController::class, 'updateRoomNumber']);
Route::get('roomNumber/cancel-booking-room/{id_roomNumber}', [RoomNumberController::class, 'CancelBookingRoom']);
Route::get('roomNumber/check-room-number/{id}', [RoomNumberController::class, 'checkRoomNumber']);

// Q&A
Route::get('qa/show', [QAController::class, 'show']);
Route::get('qa/show_detail/{id}', [QAController::class, 'show_detail']);
Route::post('qa/created_at', [QAController::class, 'created_at']);
Route::delete('qa/deleteQa/{id}', [QAController::class, 'deleteQa']);

//noty_notyqa
Route::get('noty_qa/show', [notyNotyQaController::class, 'show']);
Route::post('noty_qa/create', [notyNotyQaController::class, 'AddComment']);
Route::get('noty_qa/show/{id}', [notyNotyQaController::class, 'show_one']);

//address
Route::get('post/show_province', [PostController::class, 'show_province']);
Route::get('post/show_district', [PostController::class, 'show_districtAll']);
Route::get('post/show_districtSearch', [PostController::class, 'show_districtSearch']);
Route::get('post/show_ward', [PostController::class, 'show_ward']);
Route::get('post/show_wardSearch', [PostController::class, 'show_wardSearch']);
Route::get('trendPost', [PostController::class, 'show_trend']);

// imgPost
Route::get('imgPost/show', [imgPostController::class, 'show']);
Route::get('imgPost/show_one', [imgPostController::class, 'show_one']);
Route::get('imgPost/show/{id}', [imgPostController::class, 'show_id']);
Route::get('imgPost/show_detail/{id}', [imgPostController::class, 'show_img_detail']);
Route::post('imgPost/create', [imgPostController::class, 'created_at']);
Route::put('imgPost/update/{id}', [imgPostController::class, 'update']);
Route::delete('imgPost/delete/{id}', [imgPostController::class, 'delete']);

//imgQA
Route::get('imgQa/show', [img_QAController::class, 'show']);
Route::get('imgQa/show/{id}', [img_QAController::class, 'show_id']);
Route::post('imgQa/create', [img_QAController::class, 'create']);

// Furniture
Route::get('furniture/show', [FurnitureController::class, 'show']);
Route::get('furniture/show/{id}', [FurnitureController::class, 'show_id']);
Route::post('furniture/create', [FurnitureController::class, 'created_at']);
Route::put('furniture/update/{id}', [FurnitureController::class, 'update']);
Route::delete('furniture/delete/{id}', [FurnitureController::class, 'delete']);

// Favorite
// Route::get('favorite/show', [FavoriteController::class, 'show']);
// Route::get('favorite/show/{id}', [FavoriteController::class, 'show_id']);
// Route::post('favorite/create', [FavoriteController::class, 'created_at']);

// RoomType
Route::get('roomType/show', [RoomTypeController::class, 'show']);
Route::get('roomType/show/{id}', [RoomTypeController::class, 'show_id']);
Route::post('roomType/create', [RoomTypeController::class, 'created_at']);
Route::put('roomType/update/{id}', [RoomTypeController::class, 'update']);
Route::delete('roomType/delete/{id}', [RoomTypeController::class, 'delete']);

// Comment
Route::get('comment/show', [CommentController::class, 'Comment_SelectAll']);
Route::get('comment/post/show/{id_post}', [CommentController::class, 'Comment_SelectPost']);
Route::get('comment/show/{id}', [CommentController::class, 'Comment_SelectOne']);
Route::get('comment/showUserDes', [CommentController::class, 'CommentDes']);
Route::post('comment/create', [CommentController::class, 'CommentAdd']);
Route::put('comment/update/{id}', [CommentController::class, 'CommentEdit']);
Route::delete('comment/delete/{id}', [CommentController::class, 'CommentDelete']);
Route::get('comment/count/{id}', [CommentController::class, 'Count_Comment']);

// CommentQa
Route::get('comment_qa/show', [comment_QAController::class, 'show_all']);
Route::get('comment_qa/show_qa', [comment_QAController::class, 'show_QA']);
Route::post('comment_qa/create', [comment_QAController::class, 'Comment_QA_Add']);
Route::get('comment_qa/show/{id}', [comment_QAController::class, 'Comment_QASelectOne']);
Route::put('comment_qa/update/{id}', [comment_QAController::class, 'CommentEdit']);
Route::delete('comment_qa/delete/{id}', [comment_QAController::class, 'CommentDelete']);
Route::get('comment/qa-comment-owner/{id_user}', [comment_QAController::class, 'getAllCommentPostUserOwner']);
Route::get('comment_qa/count/{id}', [Comment_QAController::class, 'Count_Comment']);
Route::get('comment-qa-count',[comment_QAController::class, 'countCommentQA']);
// User
Route::get('user/show', [UserController::class, 'User_SelectAll']);
Route::get('user/show/{id}', [UserController::class, 'User_SelectOne']);
Route::get('user/showAcount/{id}', [UserController::class, 'UserAcount']);
Route::get('user/showimg/{id}', [UserController::class, 'ImgUser']);
Route::get('user/showimg', [UserController::class, 'ImgUserAll']);
Route::post('user/create', [UserController::class, 'UserAdd']);
Route::put('user/update/{id}', [UserController::class, 'UserEdit']);
Route::put('user/updateStatus/{id}', [UserController::class, 'UserStatus']);
Route::put('user/avatar/{id_user}', [UserController::class, 'userUpdateImg']);
Route::put('user/updatepassword/{id}', [UserController::class, 'PasswordEdit']);
Route::put('user/updatepasswordsocial/{id}', [UserController::class, 'PasswordEditSocial']);
Route::delete('user/delete/{id}', [UserController::class, 'UserDelete']);
Route::get('user/show_province_detail/{id}', [UserController::class, 'show_province_detail']);
Route::get('user/show_district_detail/{id}', [UserController::class, 'show_district_detail']);
Route::get('user/show_ward_detail/{id}', [UserController::class, 'show_ward_detail']);
Route::post('user/login', [UserController::class, 'UserLogin']);
Route::get('user/owner-post', [UserController::class, 'getUserResignerOwnerPost']);
Route::get('user/handle-post-room/{id}', [UserController::class, 'handlePostRoomUser']);
Route::get('user/cancel-post-room/{id}', [UserController::class, 'handleCancelPostRoomUser']);

// Contact
Route::get('contact/show', [ContactController::class, 'Contact_SelectAll']);
Route::get('contact/show/{id}', [ContactController::class, 'Contact_SelectOne']);
Route::post('contact/create', [ContactController::class, 'ContactAdd']);
Route::put('contact/update/{id}', [ContactController::class, 'ContactEdit']);

// Rating
Route::get('rating/show', [RatingController::class, 'Rating_Selectall']);
Route::get('rating/show/{id}', [RatingController::class, 'Rating_SelectUser']);
Route::get('rating/show/post/{id}', [RatingController::class, 'get_allStarPost']);
Route::post('rating/create', [RatingController::class, 'RatingAdd']);
Route::put('rating/update/{id}', [RatingController::class, 'RatingEdit']);
// Route::delete('rating/delete/{id}', [RatingController::class, 'RatingDelete']);
Route::get('rating/average/{id_post}', [RatingController::class, 'Rating_Average']);

/// Search
Route::post('search', [search_trendsController::class, 'search_key_word']);
Route::get('searchAll', [SearchController::class, 'keyword_searching']);
Route::get('trend', [search_trendsController::class, 'show']);
Route::get('getKeyWord/{keyword}', [search_trendsController::class, 'show_keyword']);

// search admin
Route::get('getkeywordcategory/{keyword}', [search_trendsController::class, 'show_keyword_catelory']);
Route::get('getkeywordroomtype/{keyword}', [search_trendsController::class, 'show_keyword_roomType']);
Route::get('getkeywordpost/{keyword}', [search_trendsController::class, 'show_keyword_post']);
Route::get('getkeywordblog/{keyword}', [search_trendsController::class, 'show_keyword_blog']);
Route::get('getkeywordfurniture/{keyword}', [search_trendsController::class, 'show_keyword_furniture']);
Route::get('getkeywordcomment/{keyword}', [search_trendsController::class, 'show_keyword_comment']);
Route::get('getkeyworduser/{keyword}', [search_trendsController::class, 'show_keyword_user']);

// Province
Route::get('province/show', [ProvinceController::class, 'get_ProvinceAll']);
Route::get('province/showPostSearch', [ProvinceController::class, 'get_ProvincePost']);

Route::middleware('guest')->group(function () {
    Route::post('register', [RegisteredUserController::class, 'store']);
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    Route::put('reset-password/{token}', [NewPasswordController::class, 'store'])->name('password.update');
    Route::post('bill-mail', [EmailBillController::class, 'store']);
    Route::post('book-room', [EmailBookRoomController::class, 'store']);
    Route::post('check-out', [EmailCheckOutController::class, 'store']);
    Route::post('check-out-success', [EmailAlertCheckOutController::class, 'success']);
    Route::post('check-out-unsuccess', [EmailAlertCheckOutController::class, 'unsuccess']);
});
Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])->name('verification.notice');
    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('verification.send');
    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

//StatisticalS
Route::get('StatisticalSController/category', [StatisticalSController::class, 'count_category']);
Route::get('StatisticalSController/roomType', [StatisticalSController::class, 'count_roomType']);
Route::get('StatisticalSController/post', [StatisticalSController::class, 'count_post']);
Route::get('StatisticalSController/blog', [StatisticalSController::class, 'count_blog']);
Route::get('StatisticalSController/furniture', [StatisticalSController::class, 'count_furniture']);
Route::get('StatisticalSController/comment', [StatisticalSController::class, 'count_comment']);
Route::get('StatisticalSController/user', [StatisticalSController::class, 'count_user']);
Route::get('StatisticalSController/contact', [StatisticalSController::class, 'count_contact']);
Route::get('StatisticalSController/view', [StatisticalSController::class, 'count_view']);
Route::get('StatisticalSController/emptyRoom/{id}', [StatisticalSController::class, 'count_EmptyRoom']);
Route::get('StatisticalSController/depositRoom/{id}', [StatisticalSController::class, 'count_DepositRoom']);
Route::get('StatisticalSController/ownershipRoom/{id}', [StatisticalSController::class, 'count_OwnershipRoom']);
Route::get('StatisticalSController/revenueRoom/{id}', [StatisticalSController::class, 'count_RevenueRoom']);
Route::get('StatisticalSController/monthRoom/{id}', [StatisticalSController::class, 'count_MonthRoom']);

//view_index
Route::get('view_index/update_view', [ViewController::class, 'updateViewIndex']);
Route::get('view_index/show', [ViewController::class, 'show']);

// Bill 
Route::get('bill/show', [BillController::class, 'show']);
Route::get('bill/show_id_roomNumber/{id}', [BillController::class, 'show_id_roomNumber']);
Route::get('bill/show_id_bill/{id}', [BillController::class, 'show_id_bill']);
Route::get('bill/sum', [BillController::class, 'sum_bill']);
Route::get('bill/user/{id}', [BillController::class, 'getDataBillUser']);
Route::get('bill-detail/user/{id}', [BillController::class, 'getDataBillDetailUser']);
Route::post('bill/create', [BillController::class, 'created_at']);
Route::put('bill/update/{id}', [BillController::class, 'update']);
Route::delete('bill/delete/{id}', [BillController::class, 'delete']);
Route::get('bill/month-owner/{id_user}', [BillController::class, 'getOwnerTotalBillMonth']);

// TEST SMS
Route::post('test-sms', [BillController::class, 'testSms']);

// CHECK OLD USER ROOM  TO RATE
Route::get('check-old-user/{id_user}', [ControllersSavingRoomController::class, 'checkOldOwnerRoom']);
// Route::get('check-old-user/{id_user}', [SavingRoomController::class, 'checkOldOwnerRoom']);

// GOOGLE
// Route::get('auth/google/get-google-sign-in-url', [GoogleController::class, 'getGoogleSignInUrl']);
// Route::post('auth/google/callback', [GoogleController::class, 'loginCallback']);

// GOOGLE
Route::get('auth/google/url', [GoogleController::class, 'getGoogleSignInUrl']);
Route::get('auth/google/callback', [GoogleController::class, 'loginCallback']);

// FACEBOOK
Route::get('facebook', [FacebookController::class, 'getLinkUrl']);
Route::get('facebook/callback', [FacebookController::class, 'FacebookLoginCallback']);

Route::get('notify/{id_user}', [NotificationController::class, 'getNotification']);
Route::get('notify/mask-as-read/{id_user}', [NotificationController::class, 'maskAsReads']);
Route::get('notify/mask-as-read-id-noti/{id_notification}', [NotificationController::class, 'maskAsReadsId']);

// VNPAY
Route::get('vnpay', [PayOnlineController::class, 'create']);
Route::get('notify/{id_user}', [NotificationController::class, 'getNotification']);
Route::get('notify/mask-as-read/{id_user}', [NotificationController::class, 'maskAsReads']);
Route::get('notify/mask-as-read-id-noti/{id_notification}', [NotificationController::class, 'maskAsReadsId']);

// REACTION LOVE

Route::get('reaction-love',[ReactionController::class,'getLoveReaction']);
Route::post('reaction-love',[ReactionController::class,'addLoveReaction']);
Route::put('reaction-love/{id}',[ReactionController::class,'editLoveReaction']);
Route::get('notify/mask-as-read-id-noti/{id_notification}', [NotificationController::class, 'maskAsReadsId']);
