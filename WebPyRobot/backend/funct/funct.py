from backend.models import Armor, Caterpillar, Ia, NavSystem, TypeItem, Weapon

def getItemByType(itemIn,type):
    if type ==  TypeItem(pk=1) :
        return Weapon.objects.get(pk=itemIn)
    elif type == TypeItem(pk=2):
        return Armor.objects.get(pk=itemIn)
    elif type == TypeItem(pk=3):
        return Caterpillar.objects.get(pk=itemIn)
    elif type == TypeItem(pk=4) :
        return NavSystem.objects.get(pk=itemIn)
