from django.conf.urls import url, include
from django.contrib.auth import views as auth_views

from . import views

app_name = 'backend'
urlpatterns = [
    url(r'^$', views.index, name='index'),
    url(r'^login/$', views.login, name='login'),
    url(r'^logout/$', views.logout, name='logout'),
    url(r'^signup/$', views.signup, name='signup'),
    url(r'^fight/$', views.fight, name='fight'),
    url(r'^fight/(?P<pk>[0-9]+)/$', views.figthdetail, name='fightdetail'),
    url(r'^editor/$', views.editor, name='editor'),
    url(r'^editor/(?P<pk>[0-9]+)/$', views.editordetail, name='editordetail'),
    url(r'^market/$', views.market, name='market'),
    url(r'^help/$', views.help, name='help'),
]