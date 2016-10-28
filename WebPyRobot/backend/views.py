from django.shortcuts import render, redirect
from django.http import HttpResponse
from django.contrib.auth.decorators import login_required
from django.views.decorators.cache import never_cache
from django.views.generic.edit import FormView
from django.urls import reverse
from django.contrib.auth.models import User
from django.core.exceptions import ObjectDoesNotExist

# Create your views here.


def index(request):
    if request.user.is_authenticated:
        return HttpResponse('page d un user connecté')
    else:
        return HttpResponse('page index')


@never_cache
def login(request):
    if request.user.is_authenticated:
        return redirect(reverse('backend:index'))
    if request.method == 'POST':
        username = request.POST.get('username')
        password = request.POST.get('password')
        from django.contrib.auth import authenticate
        user = authenticate(username=username, password=password)
        if user is not None:
            from django.contrib.auth import login
            login(request, user)
            urlnext = request.POST.get('next', reverse('backend:index'))
            return redirect(urlnext)
        else:
            context = {
                'next': request.GET.get('next'),
                'error': 'Your username and password didn\'t match. Please try again.'
            }
            return render(request, 'backend/login.html', context)
    return render(request, 'backend/login.html',  {'next': request.GET.get('next')})


@never_cache
def logout(request):
    from django.contrib.auth import logout
    logout(request)
    return redirect(reverse('backend:index'))


class SignUp (FormView):
    from .forms import SignUpForm
    template_name = 'backend/signup.html'
    form_class = SignUpForm

    def get_success_url(self):
        self.success_url = reverse('backend:signupthanks')
        return super().get_success_url()

    def get(self, request, *args, **kwargs):
        from django.contrib.auth import logout
        logout(request)
        return super().get(request, *args, **kwargs)

    def form_valid(self, form):
        email = form.cleaned_data['email']
        username = form.cleaned_data['username']
        password = form.cleaned_data['password']
        try:
            User.objects.get(username=username)
        except ObjectDoesNotExist:
            User.objects.create_user(username, email, password)
            return super(SignUp, self).form_valid(form)
        return super(SignUp, self).form_invalid(form)


def thanks(request):
    return HttpResponse('Merci de c etre inscrit !')

@login_required(login_url='/login/')
def fight(request):
    return HttpResponse('page de fight')

@login_required(login_url='/login/')
def figthdetail(request, pk):
    return HttpResponse('page figthDetails pour ' + pk)

@login_required(login_url='/login/')
def editor(request):
    return HttpResponse('page de l editor')

@login_required(login_url='/login/')
def editordetail(request, pk):
    return HttpResponse('page de l editor pour ' + pk)

@login_required(login_url='/login/')
def market(request):
    return HttpResponse('page du market')

@login_required(login_url='/login/')
def help(request):
    return HttpResponse('page du je suis perdu')