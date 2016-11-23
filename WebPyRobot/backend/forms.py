from django import forms


class SignUpForm (forms.Form):
    email = forms.EmailField(label='email', required=True, widget=forms.EmailInput(attrs={'class': 'blop'}))
    username = forms.CharField(label='username', required=True)
    password = forms.CharField(label='password', widget=forms.PasswordInput, required=True)


class CodeForm (forms.Form):
    ia = forms.CharField(label='ia')