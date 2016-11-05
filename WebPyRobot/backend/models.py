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
    text = models.TextField()


class Equipment(models.Model):
    name = models.CharField(max_length=200)
    price = models.PositiveIntegerField()


class Weapon(models.Model):
    equipment = models.OneToOneField(Equipment, on_delete=models.CASCADE)
    attackValue = models.PositiveIntegerField()
    range = models.PositiveIntegerField()


class Armor(models.Model):
    equipment = models.OneToOneField(Equipment, on_delete=models.CASCADE)
    armorValue = models.PositiveIntegerField()


class Caterpillar(models.Model):
    equipment = models.OneToOneField(Equipment, on_delete=models.CASCADE)
    moveValue = models.PositiveIntegerField()


class NavSystem(models.Model):
    equipment = models.OneToOneField(Equipment, on_delete=models.CASCADE)
    actionValue = models.PositiveIntegerField()


class Tank(models.Model):
    owner = models.ForeignKey(UserProfile)
    ia = models.ForeignKey(Ia)
    weapon = models.ForeignKey(Weapon)
    armor = models.ForeignKey(Armor)
    caterpillar = models.ForeignKey(Caterpillar)
    navSystem = models.ForeignKey(NavSystem)


