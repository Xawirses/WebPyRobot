from django.db import models
from django.contrib.auth.models import User

# Create your models here.


class UserProfile(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE)
    money = models.PositiveIntegerField(default=0)
    avatar = models.ImageField(blank=True)

    def __str__(self):
        return self.user.username


class Ia(models.Model):
    owner = models.ForeignKey(UserProfile)
    name = models.CharField(max_length=50, default='')
    text = models.TextField()

    def __str__(self):
        return self.name


class Weapon(models.Model):

    name = models.CharField(max_length=200)
    price = models.PositiveIntegerField()
    attackValue = models.PositiveIntegerField()
    range = models.PositiveIntegerField()

    def __str__(self):
        return self.equipment.__str__()


class Armor(models.Model):
    name = models.CharField(max_length=200)
    price = models.PositiveIntegerField()
    armorValue = models.PositiveIntegerField()

    def __str__(self):
        return self.equipment.__str__()


class Caterpillar(models.Model):
    name = models.CharField(max_length=200)
    price = models.PositiveIntegerField()
    moveValue = models.PositiveIntegerField()

    def __str__(self):
        return self.equipment.__str__()


class NavSystem(models.Model):
    name = models.CharField(max_length=200)
    price = models.PositiveIntegerField()
    actionValue = models.PositiveIntegerField()

    def __str__(self):
        return self.equipment.__str__()


class Tank(models.Model):
    owner = models.ForeignKey(UserProfile)
    ia = models.ForeignKey(Ia)
    weapon = models.ForeignKey(Weapon)
    armor = models.ForeignKey(Armor)
    caterpillar = models.ForeignKey(Caterpillar)
    navSystem = models.ForeignKey(NavSystem)

    def __str__(self):
        return self.owner.__str__()


