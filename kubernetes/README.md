# Kubernetes demo

This is a simple set of files to demonstrate running an application in an existing Kubernetes cluster. Proceed as follows:

1. Create a cluster and get access to it via kubectl. E.g. in Azure: 
  - Create cluster via azure webinterface (https://portal.azure.com)
  - Install Azure CLI (https://docs.microsoft.com/de-de/cli/azure/install-azure-cli?view=azure-cli-latest)
  - Login: `$ az login`
  - Get kube config file with access data: `$ az aks get-credentials --name <cluster name> --resource-group <resource group>`
  - Check if everything OK: `$ kubectl cluster-info` and `$ kubectl get all --all-namespaces`
  - Browse via Dashboard: `$ az aks browse --name <cluster name> --resource-group <resource group>`

2. Create deployment: `kubectl apply -f cage.deployment.yaml`

3. Create service: `kubectl apply -f cage.deployment.yaml`

4. Check out service external address via Dashboard.