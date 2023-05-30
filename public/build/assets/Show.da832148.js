import{_ as c}from"./BaseLayout.e33f2dab.js";import p from"./DeleteUserForm.57792938.js";import l from"./LogoutOtherBrowserSessionsForm.4e1850bb.js";import{S as s}from"./SectionBorder.67984c62.js";import f from"./TwoFactorAuthenticationForm.e310d921.js";import u from"./UpdatePasswordForm.054f20b2.js";import _ from"./UpdateProfileInformationForm.e421bafe.js";import{o,c as d,w as n,a as i,e as r,b as t,f as a,F as h}from"./app.937ab2e3.js";import"./_plugin-vue_export-helper.cdc0426e.js";import"./ResponsiveNavLink.0bfe1a7f.js";import"./DialogModal.b9b3dcc3.js";import"./SectionTitle.c93fd6f8.js";import"./DangerButton.3f7be2d3.js";import"./TextInput.4b8d1343.js";import"./SecondaryButton.73979774.js";import"./ActionMessage.1dc83e00.js";import"./PrimaryButton.07de82c2.js";import"./InputLabel.6a42332e.js";import"./FormSection.e08d9e64.js";const g=i("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Profile ",-1),$={class:"max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"},w={key:0},k={key:1},y={key:2},G={__name:"Show",props:{confirmsTwoFactorAuthentication:Boolean,sessions:Array},setup(m){return(e,x)=>(o(),d(c,{title:"Profile"},{header:n(()=>[g]),default:n(()=>[i("div",null,[i("div",$,[e.$page.props.jetstream.canUpdateProfileInformation?(o(),r("div",w,[t(_,{user:e.$page.props.user},null,8,["user"]),t(s)])):a("",!0),e.$page.props.jetstream.canUpdatePassword?(o(),r("div",k,[t(u,{class:"mt-10 sm:mt-0"}),t(s)])):a("",!0),e.$page.props.jetstream.canManageTwoFactorAuthentication?(o(),r("div",y,[t(f,{"requires-confirmation":m.confirmsTwoFactorAuthentication,class:"mt-10 sm:mt-0"},null,8,["requires-confirmation"]),t(s)])):a("",!0),t(l,{sessions:m.sessions,class:"mt-10 sm:mt-0"},null,8,["sessions"]),e.$page.props.jetstream.hasAccountDeletionFeatures?(o(),r(h,{key:3},[t(s),t(p,{class:"mt-10 sm:mt-0"})],64)):a("",!0)])])]),_:1}))}};export{G as default};
