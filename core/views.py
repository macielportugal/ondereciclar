from django.shortcuts import redirect, render

from .forms import OrganizationForm
from .models import Organization


def index(request):
    orgs = Organization.objects.all()
    return render(request, "core/index.html", {"orgs": orgs})


def add(request):
    if request.method == "POST":
        form = OrganizationForm(request.POST)
        if form.is_valid():
            form.save()
            return redirect("add")
    else:
        form = OrganizationForm()
    return render(request, "core/add.html", {"form": form})
