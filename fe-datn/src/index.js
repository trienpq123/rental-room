import React from 'react';
import ReactDOM from 'react-dom/client';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css';
import './css/app.css';
import './css/style.css';
import './css/responsive.css';
import './css/blog.css';
import './css/pagination.css';

// admin home
import App from './components/admin/App';
import Home from './components/admin/Home';
// admin category
import AddCategory from './components/admin/category/AddCategory';
import EditCategory from './components/admin/category/EditCategory';
import ListCategory from './components/admin/category/ListCategory';
// admin roomtype
import AddRoomType from './components/admin/roomtype/AddRoomType';
import EditRoomType from './components/admin/roomtype/EditRoomType';
import ListRoomType from './components/admin/roomtype/ListRoomType';

// admin post
import ListPost from './components/admin/post/ListPost';
import DetailPost from './components/admin/post/DetailPost';

// admin Blog 
import AddBlog from './components/admin/Blog/AddBlog';
import EditBlog from './components/admin/Blog/EditBlog';
import ListBlog from './components/admin/Blog/ListBlog';
import DetailBlog from './components/admin/Blog/DeatilBlog';
// admin Furniture
import AddFurniture from './components/admin/furniture/AddFurniture';
import EditFurniture from './components/admin/furniture/EditFurniture';
import ListFurniture from './components/admin/furniture/ListFurniture';
// admin contact
import ListContact from './components/admin/contact/ListContact';
import EditContact from './components/admin/contact/EditContact';
// admin comment
import ListComment from './components/admin/comment/ListComment';
// admin setting
import SettingConfig from './components/admin/setting/Setting';
import BannerConfig from './components/admin/setting/BannerConfig';
import FooterConfig from './components/admin/setting/FooterConfig';
import EditBanner from './components/admin/setting/EditBanner';
import ListLogo from './components/admin/setting/ListLogo';

// link menu user
import HomeUser from './components/user/HomeUser';
import About from './components/user/About';
import Blog from './components/user/blog/Blog';
import BlogDetail from './components/user/blog/BlogDetail';
import Contact from './components/user/Contact';
import Gallery from './components/user/Gallery/Gallery';
import Room from './components/user/Room/Room';
import RoomDetail from './components/user/Room/RoomDetail';
import LayoutUser from './components/user/LayoutUser';
import Login from './components/user/Login';
import Signin from './components/user/Signin';
import ForgotPassword from './components/user/ForgotPassword';
import ResetPassword from './components/user/ResetPass';
import Loi from './components/loi_404';
import SearchRoom from './components/user/SearchRoom';
import QA from './components/user/QA';
import Privacy from './components/user/PrivacyPolicy';
// postuser
import AddPostUser from './components/user/postuser/App';
import EditPostUser from './components/user/postuser/EditPost';
// user
import Profile from './components/user/account/Profile';
import UpdateAccount from './components/user/account/UpdateAccount';
import ConfirmAccount from './components/user/account/ConfirmAccount';
import LayoutConfig from './components/admin/setting/LayoutConfig';
import LayoutManage from './components/user/manage/LayoutManage';
import ListManageRoom from './components/user/manage/ListManageRoom';
import DetailRoomManage from './components/user/Room/DetailRoomManage';
import Square from './components/user/Room/Square';
import LayoutBill from './components/user/Bill/LayoutBill';
import Rules from './components/user/Rules';
import BillDetail from './components/user/Bill/BillDetail';
import LayoutSendNoti from './components/user/sendNotification/LayoutSendNoti';
import QADetail from './components/user/QADetail';
import LoginGoogle from './components/user/socialite/LoginGoogle';
import LoginFacebook from './components/user/socialite/LoginFacebook';
import CheckRoomManage from './components/user/manage/CheckRoomManage';
import vnpay from './components/user/pay/vnpay';
import Payment from './components/user/Bill/Payment';
import ListRoleManage from './components/admin/roleManage/ListRoleManage';
import ScrollToTop from './components/ScrollToTop';

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>
    <BrowserRouter>
    <ScrollToTop />
    <Routes>
      {/* chuyển hướng user */}
      <Route path="/" element={<LayoutUser />}>
        <Route path="" element={<HomeUser />} />
        <Route path="about" element={<About />} />
        <Route path="blog" element={<Blog />} />
        <Route path="blogdetail/:id_blog" element={<BlogDetail />} />
        <Route path="contact" element={<Contact />} />
        <Route path="gallery" element={<Gallery />} />
        <Route path="room" element={<Room />} />
        <Route path="roomdetail/:id_post" element={<RoomDetail />} />
        <Route path="square/:id_post" element={<Square />} />
        <Route path="addpost" element={<AddPostUser /> } />
        <Route path="editpost/:id_post" element={<EditPostUser />} />
        <Route path="login" element={<Login />} />
        <Route path="signin" element={<Signin />} />
        <Route path="forgotpw" element={<ForgotPassword />} />
        <Route path="resetpw/:token" element={<ResetPassword />} />
        <Route path="/profile" element={<Profile />}>
          <Route path=":id_user" element={<Profile />} />
        </Route>
        
        <Route path="roomDetailManage" element={<DetailRoomManage />} />
        <Route path="payment" element={<Payment />} />
        {/* bill */}
        <Route path="/layoutBill/:id_user" element={<LayoutBill />} />
        <Route path="billdetail/:id_bill" element={<BillDetail />} />
        <Route path="update_acc/:id_Account" element={<UpdateAccount />} />
        <Route path="confirm_acc/:id_Account" element={<ConfirmAccount />} /> 
        <Route path="searchroom" element={<SearchRoom />} /> 
        <Route path="hoidap" element={<QA />} />
        <Route path="qaDetail/:id_qa" element={<QADetail />} />
        <Route path="baomat" element={<Privacy />} />
        <Route path="rules" element={<Rules />} />
        {/* quan ly phong */}
        <Route path="layoutManage/:id_user" element={<LayoutManage />} />
        <Route path="listmanage" element={<ListManageRoom />} />
        <Route path="tablemanage" element={<ListManageRoom />} />
        <Route path="checkroom/:id_roomNumber" element={<CheckRoomManage />} />
        <Route path="Loi" element={<Loi />} />
        {/* gui yeu cau thong bao phong */}
        <Route path="layoutSendNoti/:id_user" element={<LayoutSendNoti />} />
        <Route path="auth/google"  element={<LoginGoogle />} />
        <Route path="facebook"  element={<LoginFacebook />} />

        {/* PAY ONLIEN */}
        <Route path="return-vnpay" element={vnpay} />
      </Route>

      {/* chuyển hướng admin tổng */}
      <Route path="/admin" element={<App />}>
        <Route path="" element={<Home/>} />
        {/* post */}
        <Route path="list_post" element={<ListPost />} />
        <Route path="detail_post/:id_post" element={<DetailPost />} />
        {/* blog */}
        <Route path="list_blog" element={<ListBlog />} />
        <Route path="add_blog" element={<AddBlog />} />
        <Route path="edit_blog/:id_blog" element={<EditBlog />} />
        <Route path="detail_blog/:id_blog" element={<DetailBlog />} />

        {/* furniture */}
        <Route path="add_furniture" element={<AddFurniture />} />
        <Route path="edit_furniture/:id_furniture" element={<EditFurniture />} />
        <Route path="list_furniture" element={<ListFurniture />} />
        {/* contact */}
        <Route path="list_contact" element={<ListContact />} />
        <Route path="edit_contact/:id_contact" element={<EditContact />} />
        {/* comment */}
        <Route path="list_comment" element={<ListComment />} />
        {/* category */}
        <Route path="add_category" element={<AddCategory />} />
        <Route path="edit_category/:id_category" element={<EditCategory />} />
        <Route path="list_category" element={<ListCategory />} />

        {/* roomtype */}
        <Route path="add_roomtype" element={<AddRoomType />} />
        <Route path="edit_roomtype/:id_room_type" element={<EditRoomType />} />
        <Route path="list_roomtype" element={<ListRoomType />} />
        {/* role manage list */}
        <Route path="list_rolemanage" element={<ListRoleManage />} />

        {/* chuyển hướng các trang trong setting */}
        <Route path="listlogo" element={<LayoutConfig />}>
          <Route path="" element={<ListLogo />} /> 
          <Route path="setting/:id_config" element={<SettingConfig />} /> 
          <Route path="footerConfig" element={<FooterConfig />} />        
          <Route path="bannerConfig" element={<BannerConfig />} />        
          <Route path="bannerConfig/editBanner/:id_banner_config" element={<EditBanner />} />        
        </Route>
      </Route>
    </Routes>
    </BrowserRouter>
  </React.StrictMode>
);